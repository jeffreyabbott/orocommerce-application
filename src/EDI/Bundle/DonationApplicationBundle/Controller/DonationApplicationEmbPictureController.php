<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbPictureController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_picture_index") //Fix this
	 * @Template("@DonationApplication/EmbPicture/index.html.twig")
	 * @Acl(
	 *     id="donation.application_picture_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbPicture",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-picture-grid');
	}

	/**
	 * @Route("/create", name="donation.application_picture_create")
	 * @Template("@DonationApplication/EmbPicture/update.html.twig")
	 * @Acl(
	 *     id="donation.application_picture_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbPicture",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbPicture(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_picture_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_picture_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbPicture",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbPicture $emb_picture, Request $request)
	{
		return $this->update($emb_picture, $request);
	}

	private function update(EmbPicture $emb_picture, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationPictureType', $emb_picture);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_picture);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_picture_update',
					'parameters' => array('id' => $emb_picture->getId()),
				),
				array('route' => 'donation.application_picture_index'),
				$emb_picture
			);
		}

		return array(
			'entity' => $emb_picture,
			'form' => $form->createView(),
		);
	}

}
