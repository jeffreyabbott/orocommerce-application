<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeEduHistory;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbWifeEduHistoryController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_wife_edu_history_index") //Fix this
	 * @Template("@DonationApplication/EmbWifeEduHistoryController/index.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_edu_history_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeEduHistory",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-wife-edu-history-grid');
	}

	/**
	 * @Route("/create", name="donation.application_wife_edu_history_create")
	 * @Template("@DonationApplication/EmbWifeEduHistory/update.html.twig")
	 * @Acl(
	 *     id="donation.application_wife_edu_history_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeEduHistory",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbWifeEduHistory(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_wife_edu_history_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_wife_edu_history_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbWifeEduHistory",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbWifeEduHistory $emb_wife_edu_history, Request $request)
	{
		return $this->update($emb_wife_edu_history, $request);
	}

	private function update(EmbWifeEduHistory $emb_wife_edu_history, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeEduHistType', $emb_wife_edu_history);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_wife_edu_history);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_wife_edu_hist_update',
					'parameters' => array('id' => $emb_wife_edu_history->getId()),
				),
				array('route' => 'donation.application_wife_edu_hist_index'),
				$emb_wife_edu_history
			);
		}

		return array(
			'entity' => $emb_wife_edu_history,
			'form' => $form->createView(),
		);
	}

}
