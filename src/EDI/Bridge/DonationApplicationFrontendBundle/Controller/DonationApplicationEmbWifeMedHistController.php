<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeMedHist;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifePhysChar;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeMedHistType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifePhysCharType;
use JMS\Serializer\SerializerBuilder;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;

class DonationApplicationEmbWifeMedHistController extends AbstractController
{

	/**
	 * @Route("/", name="edi_donation_medhist_wife_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{

		$emb_medhist = new EmbWifeMedHist();

		return $this->update($emb_medhist, $request, $buttonsHelper);
	}

	/**
	 * Route("/update", name="edi_donation_medhist_wife_frontend", options={"frontend"=true})
	 * Layout
	 * return array|RedirectResponse
	 */
	public function updateAction(EmbWifeMedHist $emb_wife_med_hist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		return $this->update($emb_wife_med_hist, $request, $buttonsHelper);
	}

	private function update(EmbWifeMedHist $emb_medhist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
			DonationApplicationWifeMedHistType::class,
			$emb_medhist
		);

        $currentAction = $request->get('_route');
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

		// Remove stuff from form that does not need to be shown
		$form
			->remove('id')
			->remove('applicationId');



		//$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType', $emb_application);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_medhist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => $nextAction, //Change this route
					'parameters' => array('id' => $emb_medhist->getApplicationId()),
				),
				array('route' => $nextAction), //This needs to change (to what tho?)
				$emb_medhist
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_application,
			$form,
			$this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
		);
*/
		$returnThis =  ['data' => ['donation_wife_medhist_form' => $form->createView(), 'entity' => $emb_medhist]];

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