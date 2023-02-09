<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbFamHist;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbFamHistType;
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


class DonationApplicationEmbHusbFamHistController extends AbstractController
{

	/**
	 * @Route("/", name="edi_donation_famhist_husb_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{

		$emb_famhist = new EmbHusbFamHist();

		return $this->update($emb_famhist, $request, $buttonsHelper);
	}

	/**
	 * Route("/update", name="edi_donation_famhist_husb_frontend", options={"frontend"=true})
	 * Layout
	 * return array|RedirectResponse
	 */
	public function updateAction(EmbHusbFamHist $emb_husb_fam_hist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		return $this->update($emb_husb_fam_hist, $request, $buttonsHelper);
	}

	private function update(EmbHusbFamHist $emb_famhist, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
			DonationApplicationHusbFamHistType::class,
			$emb_famhist
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
			$entityManager->persist($emb_famhist);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => $nextAction, //Change this route
					'parameters' => array('id' => $emb_famhist->getApplicationId()),
				),
				array('route' => $nextAction), //This needs to change (to what tho?)
				$emb_famhist
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_application,
			$form,
			$this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
		);
*/
		$returnThis =  ['data' => ['donation_husb_famhist_form' => $form->createView(), 'entity' => $emb_famhist]];

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