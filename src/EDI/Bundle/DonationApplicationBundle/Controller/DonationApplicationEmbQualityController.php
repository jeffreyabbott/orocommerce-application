<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbQuality;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbQualityController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_quality_index") //Fix this
	 * @Template("@DonationApplication/EmbQuality/index.html.twig")
	 * @Acl(
	 *     id="donation.application_quality_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbQuality",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-quality-grid');
	}

	/**
	 * @Route("/create", name="donation.application_quality_create")
	 * @Template("@DonationApplication/EmbQuality/update.html.twig")
	 * @Acl(
	 *     id="donation.application_quality_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbQuality",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbQuality(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_quality_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_quality_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbQuality",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbQuality $emb_quality, Request $request)
	{
		return $this->update($emb_quality, $request);
	}

	private function update(EmbQuality $emb_quality, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationQualityType', $emb_quality);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_quality);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_quality_update',
					'parameters' => array('id' => $emb_quality->getId()),
				),
				array('route' => 'donation.application_quality_index'),
				$emb_quality
			);
		}

		return array(
			'entity' => $emb_quality,
			'form' => $form->createView(),
		);
	}

}
