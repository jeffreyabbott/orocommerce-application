<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeOgHist;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeOgHistType;
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

class DonationApplicationEmbWifeOgHistController extends AbstractController
{

	/**
	 * @Route("/", name="edi_donation_oghist_wife_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{

		$emb_oghist = new EmbWifeOgHist();

		return $this->update($emb_oghist, $request, $buttonsHelper);
	}

	/**
	 * Route("/update", name="edi_donation_oghist_wife_frontend", options={"frontend"=true})
	 * Layout
	 * return array|RedirectResponse
	 */
	public function updateAction(EmbWifeOgHist $emb_wife_og_hist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		return $this->update($emb_wife_og_hist, $request, $buttonsHelper);
	}

	private function update(EmbWifeOgHist $emb_oghist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
			DonationApplicationWifeOgHistType::class,
			$emb_oghist
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
			$entityManager->persist($emb_oghist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => $nextAction, //Change this route
					'parameters' => array('id' => $emb_oghist->getApplicationId()),
				),
				array('route' => $nextAction), //This needs to change (to what tho?)
				$emb_oghist
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_application,
			$form,
			$this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
		);
*/
		$returnThis =  ['data' => ['donation_wife_oghist_form' => $form->createView(), 'entity' => $emb_oghist]];

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