<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbContactInfo;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationContactInfoType;
use JMS\Serializer\SerializerBuilder;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;


class DonationApplicationEmbContactInfoController extends AbstractController
{
    /**
     * @Route("/{applicationId}", name="edi_donation_contact_info_frontend", options={"frontend"=true})
     */
	public function indexAction()
	{
		$repository = $this->getDoctrine()->getRepository(EmbContactInfo::class);
		$embApplication = $repository->findAll();
		$serializer = SerializerBuilder::create()->build();
		$jsonContent = $serializer->serialize($embApplication, 'json');
		return new Response($jsonContent);
		//return array('gridName' => 'donation-contact_info-grid');
	}

	/**
	 * @Route("/create/{applicationId}", name="edi_donation_contact_info_frontend", options={"frontend"=true})
     * Route("/", name="edi_donation_contact_info_frontend", options={"frontend"=true})
	 * @Layout
	 * return array|RedirectResponse
	 */
	public function createAction(Request $request,DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$emb_contact_info = new EmbContactInfo();

		//$serializer = SerializerBuilder::create()->build();
		//$jsonContent = $serializer->serialize($emb_contact_info, 'json');

		//return new Response($jsonContent);

		return $this->update($emb_contact_info, $request, $buttonsHelper);
	}

    /**
     * @Route("/update/{applicationId}", name="edi_donation_contact_info_frontend_update", options={"frontend"=true})
     * @Layout
     * return array|RedirectResponse
     */
	public function updateAction(EmbContactInfo $emb_contact_info, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		return $this->update($emb_contact_info, $request, $buttonsHelper);
	}

	private function update(EmbContactInfo $emb_contact_info, Request $request, DonationApplicationPagingButtonsHelper $buttonsHelper)
	{
		$form = $this->createForm(
			DonationApplicationContactInfoType::class,
			$emb_contact_info
		);
        $currentAction = $request->get('_route');
        //Removed for testing = uncomment below line JDA
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

		// Remove stuff from form that does not need to be shown
		$form->remove('id')
			->remove('applicationId')
			->remove('socialSecurity');


		//$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbContactInfoType', $emb_contact_info);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_contact_info);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => $nextAction,
					'parameters' => array('id' => $emb_contact_info->getId()),
				),
				array('route' => $nextAction),
				$emb_contact_info
			);
		}

		/*		$result =  $this->get('oro_form.update_handler')->update(
			$emb_contact_info,
			$form,
			$this->get('translator')->trans('edi.donationcontact_info.form.embcontact_info.sent')
		);
*/
		$returnThis =  ['data' => ['donation_contact_info_form' => $form->createView(), 'entity' => $emb_contact_info]];

/*		return array(
			'entity' => $emb_contact_info,
			'donationform' => $form->createView(),
		);
*/
		return $returnThis;
	}

	/**
	 */
	public function viewAction(EmbContactInfo $emb_contact_info)
	{
		return array(
			'entity' => $emb_contact_info,
		);
	}

	public function donationPageAction(Request $request)
	{
//		$logger = $this->get('logger');
//		$logger->debug("Fuck it");
		$emb_contact_info = new EmbContactInfo();
//		$logger->debug("Fuck it 2");
		$form = $this->createForm(
			DonationApplicationEmbContactInfoType::class,
			$emb_contact_info
		);
//		$logger->debug("Fuck it 3");
		$result =  $this->get('oro_form.update_handler')->update(
			$emb_contact_info,
			$form,
			$this->get('translator')->trans('edi.donationcontact_info.form.embcontact_info.sent')
		);
//		$logger->debug("Fuck it 4");
		if ($result instanceof Response) {
			return $result;
		}
//		$logger->debug("Fuck it 5");
		//return ['data' => ['contact_us_request_form' => $form->createView()]];
//		$logger->debug("Raw Form name: " . $form->getName());
//		$logger->debug("Raw Form view: " . json_encode($form->createView()));

		$returnThis =  ['data' => ['donation_contact_info_form' => $form->createView()]];
//		$testVar = ['data' => ['something'=>'test', 'somethingelse'=>'test2']];
//		$logger->debug("Encoded test: " . json_encode($testVar,JSON_UNESCAPED_UNICODE));
//		$logger->debug("Encoded: " . json_encode($returnThis, JSON_UNESCAPED_UNICODE));
		return $returnThis;
	}

	/**
	 * Renders errors using OroContactUsBridge/validation.html.twig template.
	 */
	private function renderErrors(FormErrorIterator $errors): string
	{
		return $this->renderView('@OroContactUsBridge/validation.html.twig', ['errors' => $errors]);
	}

	/**
	 * @Route("/test2", name="demo_layout_test", options={"frontend"=true})
	 * @Layout
	 */
	public function testAction()
	{
		return [];
	}

}