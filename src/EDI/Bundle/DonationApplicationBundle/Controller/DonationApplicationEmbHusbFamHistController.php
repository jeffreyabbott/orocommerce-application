<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbFamHist;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbHusbFamHistController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_husb_fam_hist_index") //Fix this
	 * @Template("@DonationApplication/EmbHusbFamHist/index.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_fam_hist_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbFamHist",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-husb-fam-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_husb_fam_hist_create")
	 * @Template("@DonationApplication/EmbHusbFamHist/update.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_fam_hist_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbFamHist",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbHusbFamHist(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_husb_fam_hist_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_husb_fam_hist_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbFamHist",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbHusbFamHist $emb_husb_fam_hist, Request $request)
	{
		return $this->update($emb_husb_fam_hist, $request);
	}

	private function update(EmbHusbFamHist $emb_husb_fam_hist, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbFamHistType', $emb_husb_fam_hist);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_fam_hist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_husb_fam_hist_update',
					'parameters' => array('id' => $emb_husb_fam_hist->getId()),
				),
				array('route' => 'donation.application_husb_fam_hist_index'),
				$emb_husb_fam_hist
			);
		}

		return array(
			'entity' => $emb_husb_fam_hist,
			'form' => $form->createView(),
		);
	}

}
