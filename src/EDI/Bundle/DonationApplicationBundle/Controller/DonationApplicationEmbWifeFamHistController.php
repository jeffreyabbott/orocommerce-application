<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeFamHist;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbWifeFamHistController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_wife_fam_hist_index") //Fix this
	 * @Template("@DonationApplication/EmbWifeFamHist/index.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_fam_hist_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeFamHist",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-wife-fam-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_wife_fam_hist_create")
	 * @Template("@DonationApplication/EmbWifeFamHist/update.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_fam_hist_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeFamHist",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbWifeFamHist(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_wife_fam_hist_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_wife_fam_hist_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeFamHist",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbWifeFamHist $emb_wife_fam_hist, Request $request)
	{
		return $this->update($emb_wife_fam_hist, $request);
	}

	private function update(EmbWifeFamHist $emb_wife_fam_hist, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeFamHistType', $emb_wife_fam_hist);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_wife_fam_hist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_wife_fam_hist_update',
					'parameters' => array('id' => $emb_wife_fam_hist->getId()),
				),
				array('route' => 'donation.application_wife_fam_hist_index'),
				$emb_wife_fam_hist
			);
		}

		return array(
			'entity' => $emb_wife_fam_hist,
			'form' => $form->createView(),
		);
	}

}
