<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use App\Api\ArticleReferenceUploadApiModel;
use App\Entity\Article;
use App\Entity\ArticleReference;
use Aws\S3\S3Client;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPictures;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationPicturesType;

use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationPictureType;
use EDI\Bundle\DonationApplicationBundle\Service\PicturesHelper;
use EDI\Bundle\DonationApplicationBundle\Service\UploaderHelper;
use JMS\Serializer\SerializerBuilder;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\HttpFoundation\File\File as FileObject;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;
use Oro\Bundle\GaufretteBundle\FileManager;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/*
 * 	Rework copied controller method for upload image - pull out parts for uploading
	Rework uploaderHelper for Emb_pictures instead.
	Rework API model class
	Rework Delete controller method for emb_pictures
	Rework update Controller method for emb_pictures
	Rework list Controller method for emb_pictures
	Add ability to list on Twig / Layout
	Rework  reorder Controller method for emb_pictures
	Add ajax ability on Twig / JS
 */
class DonationApplicationEmbPictureController extends AbstractController
{
	/**
     * @Route("/{applicationId}", name="edi_donation_picture_frontend", options={"frontend"=true})
     * @Layout
     *
     * return array|RedirectResponse
	 */
	public function indexAction(int $applicationId, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper, PicturesHelper $picturesHelper, UploaderHelper $uploaderHelper /* FileManager $fileManager */, ValidatorInterface $validator, SerializerInterface $serializer)
	{

        $repository = $this->getDoctrine()->getRepository(EmbApplication::class);
        $emb_application = $repository->find($applicationId);
        $pictures = $picturesHelper->createPictures($emb_application);
        return $this->update($emb_application,$pictures, $request, $buttonsHelper, $picturesHelper, $uploaderHelper /*$fileManager*/, $validator, $serializer);
	}

	private function update(EmbApplication $emb_application, ArrayCollection $pictures, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper, PicturesHelper $picturesHelper, UploaderHelper $uploaderHelper /* FileManager $fileManager */, ValidatorInterface $validator, SerializerInterface $serializer)
	{
        $applicationId = $emb_application->getId();
        $emb_pictures = new EmbPictures();
        $emb_picture = new EmbPicture();
        $emb_pictures->setEmbPictures($pictures);

		$form = $this->createForm(
//			DonationApplicationPicturesType::class,
            DonationApplicationPictureType::class,
			$emb_picture
		);
        $currentAction = $request->get('_route');
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);


            //Add image if a new on is there (Delete is controlled by AJAX call). There is no Update call for images.
            if ($request->headers->get('Content-Type') === 'application/json') {
                /** var ArticleReferenceUploadApiModel $uploadApiModel */
                $uploadApiModel = $serializer->deserialize(
                    $request->getContent(),
                    EmbPictureUploadApiModel::class,
                    'json'
                );
                $violations = $validator->validate($uploadApiModel);
                if ($violations->count() > 0) {
                    return $this->json($violations, 400);
                }
                //TODO: change this temp dir
                $tmpPath = sys_get_temp_dir().'/sf_upload'.uniqid();
                file_put_contents($tmpPath, $uploadApiModel->getDecodedData());
                $uploadedFile = new FileObject($tmpPath);
                $originalName = $uploadApiModel->filename;
            } else {
                /** @var UploadedFile $uploadedFile */
                $uploadedFile = $request->files->get('reference');
                $originalName = $uploadedFile->getClientOriginalName();
            }

            //dump($uploadedFile);
            $violations = $validator->validate(
                $uploadedFile,
                [
                    new NotBlank([
                        'message' => 'Please select a file to upload.'
                    ]),
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*'
                        ]
                    ]),
                ]
            );

            if ($violations->count() > 0) {
                return $this->json($violations, 400);
            }

            $filename = $uploaderHelper->uploadApplicationImage($uploadedFile);
/*            $articleReference = new ArticleReference($article);
            $articleReference->setFilename($filename);
            $articleReference->setOriginalFilename($originalName ?? $filename);
            $articleReference->setMimeType($uploadedFile->getMimeType() ?? 'application/octet-stream');
*/
            if (is_file($uploadedFile->getPathname())) {
                unlink($uploadedFile->getPathname());
            }
            //STOP image upload code

            $entityManager = $this->getDoctrine()->getManager();
            $emb_application->setPictures($pictures);
			$entityManager->persist($emb_application);
			$entityManager->flush();
			//Send it somewhere after save
            $routeName = $request->attributes->get('_route');
            $applicationAction = $buttonsHelper->checkClickedPagingButtons("edi_donation_application_frontend", $form);
            if($nextAction === $applicationAction) {
                $action = "_update";
            } else {
                $action = "";
            }
            return $this->redirectToRoute($nextAction.$action,['applicationId'=>$applicationId]);

		}


        $returnThis = ['data' => ['donation_pictures_form' => $form->createView(), 'entity' => $emb_pictures]];

		return $returnThis;
	}



	/**
	 * Renders errors using OroContactUsBridge/validation.html.twig template.
	 */
	private function renderErrors(FormErrorIterator $errors): string
	{
		return $this->renderView('@OroContactUsBridge/validation.html.twig', ['errors' => $errors]);
	}



    /**
     * @Route("/admin/article/{id}/references", name="admin_article_add_reference", methods={"POST"})
     * @IsGranted("MANAGE", subject="article")
     *
    public function uploadArticleReference(Article $article, Request $request, \App\Service\UploaderHelper $uploaderHelper, EntityManagerInterface $entityManager, ValidatorInterface $validator, SerializerInterface $serializer)
    {

        if ($request->headers->get('Content-Type') === 'application/json') {
            /** @var ArticleReferenceUploadApiModel $uploadApiModel *
            $uploadApiModel = $serializer->deserialize(
                $request->getContent(),
                EmbPictureUploadApiModel::class,
                'json'
            );
            $violations = $validator->validate($uploadApiModel);
            if ($violations->count() > 0) {
                return $this->json($violations, 400);
            }

            $tmpPath = sys_get_temp_dir().'/sf_upload'.uniqid();
            file_put_contents($tmpPath, $uploadApiModel->getDecodedData());
            $uploadedFile = new FileObject($tmpPath);
            $originalName = $uploadApiModel->filename;
        } else {
            /** @var UploadedFile $uploadedFile *
            $uploadedFile = $request->files->get('reference');
            $originalName = $uploadedFile->getClientOriginalName();
        }

        //dump($uploadedFile);
        $violations = $validator->validate(
            $uploadedFile,
            [
                new NotBlank([
                    'message' => 'Please select a file to upload.'
                ]),
                new File([
                    'maxSize' => '5M',
                    'mimeTypes' => [
                        'image/*',
                        'application/pdf',
                        'application/msword',
                        'application/msword',
                        'application/vnd.ms-excel',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                        'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                        'text/plain'
                    ]
                ]),
            ]
        );

        if ($violations->count() > 0) {
            return $this->json($violations, 400);
        }

        $filename = $uploaderHelper->uploadArticleReference($uploadedFile);
        $articleReference = new ArticleReference($article);
        $articleReference->setFilename($filename);
        $articleReference->setOriginalFilename($originalName ?? $filename);
        $articleReference->setMimeType($uploadedFile->getMimeType() ?? 'application/octet-stream');

        if (is_file($uploadedFile->getPathname())) {
            unlink($uploadedFile->getPathname());
        }

        $entityManager->persist($articleReference);
        $entityManager->flush();
        return $this->json(
            $articleReference,
            201,
            [],
            [
                'groups' => ['main']
            ]
        );
    }

    /**
     * @Route("admin/article/{id}/references/reorder", methods={"POST"}, name="admin_article_reorder_refernces")
     * @IsGranted("MANAGE", subject="article")
     *
    public function reorderArticleReferences(Article $article, Request $request, EntityManagerInterface $entityManager)
    {
        $orderedIds = json_decode($request->getContent(), true);
        if ($orderedIds === false) {
            return $this->json(['detail' => 'Invalid body'], 400);
        }

        // from (position)=>(id) to (id) => (position)
        $orderedIds = array_flip($orderedIds);
        foreach ($article->getArticleReferences() as $reference) {
            $reference->setPosition($orderedIds[$reference->getId()]);
        }
        $entityManager->flush();

        return $this->json($article->getArticleReferences(),
            200,
            [],
            [
                'groups' => ['main']
            ]);
    }

    /**
     * Route("admin/article/{id}/references", methods={"GET"}, name="admin_article_list_refernces")
     * @IsGranted("MANAGE", subject="article")
     *
    public function getArticleReferences(Article $article)
    {
        return $this->json($article->getArticleReferences(),
            200,
            [],
            [
                'groups' => ['main']
            ]);
    }
    /**
     * Route("/admin/article/references/{id}/download", name="admin_article_download_reference", methods={"GET"})
     *
    public function downloadArticleReference(ArticleReference $reference, /*UploaderHelper $uploaderHelper* S3Client $s3Client, string $s3BucketName)
    {
        $article = $reference->getArticle();
        $this->denyAccessUnlessGranted('MANAGE',$article);

        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            $reference->getOriginalFilename()
        );

        $command = $s3Client->getCommand('GetObject', [
            'Bucket' => $s3BucketName,
            'Key' => $reference->getFilePath(),
            'ResponseContentType' => $reference->getMimeType(),
            'ResponseContentDisposition' => $disposition,
        ]);
        $request = $s3Client->createPresignedRequest($command, '+30 minutes');

        return new RedirectResponse((string) $request->getUri());
    }

    /**
     * Route("/admin/article/references/{id}", name="admin_article_delete_reference", methods={"DELETE"})
     *
    public function deleteArticleReference(ArticleReference $reference, \App\Service\UploaderHelper $uploaderHelper, EntityManagerInterface $entityManager)
    {
        $article = $reference->getArticle();
        $this->denyAccessUnlessGranted('MANAGE', $article);
        $entityManager->remove($reference);
        $entityManager->flush();

        $uploaderHelper->deleteFile($reference->getFilePath()/*, false*);

        return new Response(null, 204);
    }

    /**
     * Route("/admin/article/references/{id}", name="admin_article_update_reference", methods={"PUT"})
     *
     *
    public function updateArticleReference(ArticleReference $reference, UploaderHelper $uploaderHelper, EntityManagerInterface $entityManager, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        $article = $reference->getArticle();
        $this->denyAccessUnlessGranted('MANAGE', $article);
        $this->denyAccessUnlessGranted('MANAGE', $article);

        $serializer->deserialize(
            $request->getContent(),
            ArticleReference::class,
            'json',
            [
                'object_to_populate' => $reference,
                'groups' => 'input'
            ]
        );

        $violations = $validator->validate($reference);
        if ($violations->count() > 0) {
            return $this->json($violations,400 );
        }

        $entityManager->persist($reference);
        $entityManager->flush();

        return $this->json($reference,
            200,
            [],
            [
                'groups' => ['main']
            ]);
    }
     */
}