<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbStipulationController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_stipulation_index") //Fix this
	 * @Template("@DonationApplication/EmbStipulation/index.html.twig")
	 * @Acl(
	 *     id="donation.application_stipulation_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbStipulation",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-stipulation-grid');
	}

	/**
	 * @Route("/create", name="donation.application_stipulation_create")
	 * @Template("@DonationApplication/EmbStipulation/update.html.twig")
	 * @Acl(
	 *     id="donation.application_stipulation_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbStipulation",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbStipulation(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_stipulation_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_stipulation_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbStipulation",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbStipulation $emb_stipulation, Request $request)
	{
		return $this->update($emb_stipulation, $request);
	}

	private function update(EmbStipulation $emb_stipulation, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationStipulationType', $emb_stipulation);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_stipulation);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_stipulation_update',
					'parameters' => array('id' => $emb_stipulation->getId()),
				),
				array('route' => 'donation.application_stipulation_index'),
				$emb_stipulation
			);
		}

		return array(
			'entity' => $emb_stipulation,
			'form' => $form->createView(),
		);
	}

}
