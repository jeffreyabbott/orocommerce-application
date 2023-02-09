<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeOgHist;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbWifeOgHistController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_wife_og_hist_index") //Fix this
	 * @Template("@DonationApplication/EmbWifeOgHist/index.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_og_hist_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeOgHist",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-wife-og-hist-grid');
	}

	/**
	 * @Route("/create", name="donation.application_wife_og_hist_create")
	 * @Template("@DonationApplication/EmbWifeOgHist/update.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_og_hist_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeOgHist",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbWifeOgHist(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_wife_og_hist_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_wife_og_hist_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeOgHist",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbWifeOgHist $emb_wife_og_hist, Request $request)
	{
		return $this->update($emb_wife_og_hist, $request);
	}

	private function update(EmbWifeOgHist $emb_wife_og_hist, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeOgHistType', $emb_wife_og_hist);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_wife_og_hist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_wife_og_hist_update',
					'parameters' => array('id' => $emb_wife_og_hist->getId()),
				),
				array('route' => 'donation.application_wife_og_hist_index'),
				$emb_wife_og_hist
			);
		}

		return array(
			'entity' => $emb_wife_og_hist,
			'form' => $form->createView(),
		);
	}

}
