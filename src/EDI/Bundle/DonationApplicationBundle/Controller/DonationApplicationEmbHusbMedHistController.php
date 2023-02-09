<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbMedHist;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbHusbMedHistController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_husb_med_hist_index") //Fix this
	 * @Template("@DonationApplication/EmbHusbMedHist/index.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_med_hist_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbMedHist",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-husb-med-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_husb_med_hist_create")
	 * @Template("@DonationApplication/EmbHusbMedHist/update.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_med_hist_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbMedHist",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbHusbMedHist(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_husb_med_hist_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_husb_med_hist_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbMedHist",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbHusbMedHist $emb_husb_med_hist, Request $request)
	{
		return $this->update($emb_husb_med_hist, $request);
	}

	private function update(EmbHusbMedHist $emb_husb_med_hist, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbMedHistType', $emb_husb_med_hist);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_med_hist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_husb_med_hist_update',
					'parameters' => array('id' => $emb_husb_med_hist->getId()),
				),
				array('route' => 'donation.application_husb_med_hist_index'),
				$emb_husb_med_hist
			);
		}

		return array(
			'entity' => $emb_husb_med_hist,
			'form' => $form->createView(),
		);
	}

}
