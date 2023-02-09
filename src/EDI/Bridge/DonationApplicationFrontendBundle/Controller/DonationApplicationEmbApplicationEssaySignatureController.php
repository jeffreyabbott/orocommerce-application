<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbContactInfo;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationContactInfoType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationEssaySignatureType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType;
use JMS\Serializer\SerializerBuilder;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;

class DonationApplicationEmbApplicationEssaySignatureController extends AbstractController
{
	/**
	 * Route("/test", name="donation_frontend.essay_signature")
	 * TODO: add template and acl stuff
	 * Template("@DonationApplication/EmbContactInfo/update.html.twig")
	 * Acl(
	 *     id="donation.contact_info_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbContactInfo",
	 *     permission="CREATE"
	 * )
	 */
	public function indexAction()
	{
		$repository = $this->getDoctrine()->getRepository(EmbContactInfo::class);
		$embApplication = $repository->findAll();
		$serializer = SerializerBuilder::create()->build();
		$jsonContent = $serializer->serialize($embApplication, 'json');
		return new Response($jsonContent);
		//return array('gridName' => 'donation-contact_info-grid');
	}

	/**
	 * @Route("/{applicationId}", name="edi_donation_essay_signature_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(int $applicationId, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$repository = $this->getDoctrine()->getRepository(EmbApplication::class);


		$emb_application = $repository->find($applicationId);

//		$serializer = SerializerBuilder::create()->build();
//		$jsonContent = $serializer->serialize($emb_application, 'json');

//		return new Response($jsonContent);

		return $this->update($emb_application, $request, $buttonsHelper);
	}

    /**
     * @Route("/{applicationId}", name="edi_donation_essay_signature_frontend", options={"frontend"=true})
     * @Layout
     * return array|RedirectResponse
     */
	public function updateAction(int $applicationId, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
        $repository = $this->getDoctrine()->getRepository(EmbApplication::class);
        $emb_application = $repository->find($applicationId);
		return $this->update($emb_application, $request, $buttonsHelper);
	}

	private function update(EmbApplication $emb_application, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
			DonationApplicationEmbApplicationEssaySignatureType::class,
			$emb_application
		);
        $currentAction = $request->get('_route');
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

		//$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbContactInfoType', $emb_contact_info);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);

            $entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_application);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirect(
				array(
					'route' => $nextAction,
					'parameters' => array('applicationId' => $emb_application->getId()),
				),
				$emb_application
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_contact_info,
			$form,
			$this->get('translator')->trans('edi.donationcontact_info.form.embcontact_info.sent')
		);
*/
		$returnThis =  ['data' => ['donation_essay_signature_form' => $form->createView(), 'entity' => $emb_application]];

/*		return array(
			'entity' => $emb_contact_info,
			'donationform' => $form->createView(),
		);
*/
		return $returnThis;
	}

	/**
	 */
	public function viewAction(EmbApplication $emb_application)
	{
		return array(
			'entity' => $emb_application,
		);
	}

	/**
	 * Renders errors using OroContactUsBridge/validation.html.twig template.
	 */
	private function renderErrors(FormErrorIterator $errors): string
	{
		return $this->renderView('@OroContactUsBridge/validation.html.twig', ['errors' => $errors]);
	}

	/**
	 * @Route("/test2", name="demo_layout_test", options={"frontend"=true})
	 * @Layout
	 */
	public function testAction()
	{
		return [];
	}

}