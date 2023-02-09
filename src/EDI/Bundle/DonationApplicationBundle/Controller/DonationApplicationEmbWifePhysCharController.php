<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeMedHist;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbWifePhysCharController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_wife_phys_char_index") //Fix this
	 * @Template("@DonationApplication/EmbWifePhysChar/index.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_phys_char_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifePhysChar",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-wife-med-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_wife_phys_char_create")
	 * @Template("@DonationApplication/EmbWifePhysChar/update.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_phys_char_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifePhysChar",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbWifePhysChar(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_wife_phys_char_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_wife_phys_char_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifePhysChar",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbWifePhysChar $emb_wife_phys_char, Request $request)
	{
		return $this->update($emb_wife_phys_char, $request);
	}

	private function update(EmbWifePhysChar $emb_wife_phys_char, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifePhysCharType', $emb_wife_phys_char);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_wife_phys_char);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_wife_phys_char_update',
					'parameters' => array('id' => $emb_wife_phys_char->getId()),
				),
				array('route' => 'donation.application_wife_phys_char_index'),
				$emb_wife_phys_char
			);
		}

		return array(
			'entity' => $emb_wife_phys_char,
			'form' => $form->createView(),
		);
	}

}
