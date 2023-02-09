<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbEduHistory;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialAndEduHistCombo;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialHistory;
use JMS\Serializer\SerializerBuilder;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbSocialandEduHistoryType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbSocialHistoryType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbEduHistoryType;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;


class DonationApplicationEmbHusbSocialEduHistController extends AbstractController
{

	/**
	 * @Route("/", name="edi_donation_socialeduhist_husb_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(Request $request,DonationApplicationPagingButtonsHelper $buttonsHelper)
	{

		$emb_social_edu_hist = new EmbHusbSocialAndEduHistCombo();
		$emb_social_hist = new EmbHusbSocialHistory();
		$emb_edu_hist = new EmbHusbEduHistory();

		$emb_social_edu_hist->getEmbSocialHistory()->add($emb_social_hist);
		$emb_social_edu_hist->getEmbEduHistory()->add($emb_edu_hist);


		return $this->update($emb_social_edu_hist, $request,$buttonsHelper);
	}

	/**
	 * Route("/update", name="edi_donation_socialeduhist_husb_frontend", options={"frontend"=true})
	 * Layout
	 * return array|RedirectResponse
	 */
	public function updateAction(EmbHusbSocialAndEduHistCombo $emb_husb_social_and_edu_hist_combo, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		return $this->update($emb_husb_social_and_edu_hist_combo, $request, $buttonsHelper);
	}

	private function update(EmbHusbSocialAndEduHistCombo $emb_husb_social_and_edu_hist_combo, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
		DonationApplicationHusbSocialandEduHistoryType::class,
			$emb_husb_social_and_edu_hist_combo
		);

		// Get the embedded forms...
		$form->get('emb_social_history')[0]->remove('id')->remove('applicationId');

		$form->get('emb_edu_history')[0]->remove('id')->remove('applicationId');


        $currentAction = $request->get('_route');
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

		// Remove stuff from form that does not need to be shown - need to figure out how to do this for subforms
/*		$form
			->remove('id')
			->remove('applicationId');
*/


		//$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType', $emb_application);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);

            $entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_husb_social_and_edu_hist_combo);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => $nextAction, //Change this route
					'parameters' => array('id' => $emb_husb_social_and_edu_hist_combo->getApplicationId()),
				),
				array('route' => $nextAction), //This needs to change (to what tho?)
				$emb_husb_social_and_edu_hist_combo
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_application,
			$form,
			$this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
		);
*/
		$returnThis =  ['data' => ['donation_husb_socialeduhist_form' => $form->createView(), 'entity' => $emb_husb_social_and_edu_hist_combo]];

/*		return array(
			'entity' => $emb_application,
			'donationform' => $form->createView(),
		);
*/
		return $returnThis;
	}

	/**
	 */
	public function viewAction(EmbApplication $emb_application)
	{
		return array(
			'entity' => $emb_application,
		);
	}


	/**
	 * Renders errors using OroContactUsBridge/validation.html.twig template.
	 */
	private function renderErrors(FormErrorIterator $errors): string
	{
		return $this->renderView('@OroContactUsBridge/validation.html.twig', ['errors' => $errors]);
	}


}