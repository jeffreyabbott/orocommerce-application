<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbPhysChar;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbHusbPhysCharController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_husb_phys_char_index") //Fix this
	 * @Template("@DonationApplication/EmbHusbPhysChar/index.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_phys_char_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbPhysChar",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-husb-med-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_husb_phys_char_create")
	 * @Template("@DonationApplication/EmbHusbPhysChar/update.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_phys_char_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbPhysChar",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbHusbPhysChar(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_husb_phys_char_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_husb_phys_char_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbPhysChar",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbHusbPhysChar $emb_husb_phys_char, Request $request)
	{
		return $this->update($emb_husb_phys_char, $request);
	}

	private function update(EmbHusbPhysChar $emb_husb_phys_char, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbPhysCharType', $emb_husb_phys_char);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_phys_char);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_husb_phys_char_update',
					'parameters' => array('id' => $emb_husb_phys_char->getId()),
				),
				array('route' => 'donation.application_husb_phys_char_index'),
				$emb_husb_phys_char
			);
		}

		return array(
			'entity' => $emb_husb_phys_char,
			'form' => $form->createView(),
		);
	}

}
