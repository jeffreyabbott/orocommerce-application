<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialHistory;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbHusbSocialHistoryController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_husb_social_history_index") //Fix this
	 * @Template("@DonationApplication/EmbHusbSocialHistory/index.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_social_history_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbSocialHistory",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-husb-social-history-grid');
	}

	/**
	 * @Route("/create", name="donation.application_husb_social_history_create")
	 * @Template("@DonationApplication/EmbHusbSocialHistory/update.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_social_history_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbSocialHistory",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbHusbSocialHistory(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_husb_social_history_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_husb_social_history_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbSocialHistory",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbHusbSocialHistory $emb_husb_social_history, Request $request)
	{
		return $this->update($emb_husb_social_history, $request);
	}

	private function update(EmbHusbSocialHistory $emb_husb_social_history, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbSocialHistType', $emb_husb_social_history);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_social_history);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_husb_social_hist_update',
					'parameters' => array('id' => $emb_husb_social_history->getId()),
				),
				array('route' => 'donation.application_husb_social_hist_index'),
				$emb_husb_social_history
			);
		}

		return array(
			'entity' => $emb_husb_social_history,
			'form' => $form->createView(),
		);
	}

}
