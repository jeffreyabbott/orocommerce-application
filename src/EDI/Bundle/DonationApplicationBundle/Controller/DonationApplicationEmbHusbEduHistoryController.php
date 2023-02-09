<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbEduHistory;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbHusbEduHistoryController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_husb_edu_history_index") //Fix this
	 * @Template("@DonationApplication/EmbHusbEduHistoryController/index.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_edu_history_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbEduHistory",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-husb-edu-history-grid');
	}

	/**
	 * @Route("/create", name="donation.application_husb_edu_history_create")
	 * @Template("@DonationApplication/EmbHusbEduHistory/update.html.twig")
	 * @Acl(
	 *     id="donation.application_husb_edu_history_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbEduHistory",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbHusbEduHistory(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_husb_edu_history_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_husb_edu_history_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbHusbEduHistory",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbHusbEduHistory $emb_husb_edu_history, Request $request)
	{
		return $this->update($emb_husb_edu_history, $request);
	}

	private function update(EmbHusbEduHistory $emb_husb_edu_history, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbEduHistType', $emb_husb_edu_history);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_edu_history);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_husb_edu_hist_update',
					'parameters' => array('id' => $emb_husb_edu_history->getId()),
				),
				array('route' => 'donation.application_husb_edu_hist_index'),
				$emb_husb_edu_history
			);
		}

		return array(
			'entity' => $emb_husb_edu_history,
			'form' => $form->createView(),
		);
	}

}
