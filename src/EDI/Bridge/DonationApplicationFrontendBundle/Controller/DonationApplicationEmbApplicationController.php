<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationMarriedStipulationsType;
use EDI\Bundle\DonationApplicationBundle\Service\DonationApplicationPagingButtonsHelper;
use EDI\Bundle\DonationApplicationBundle\Service\StipulationsGroupsHelper;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Doctrine\Persistence\ManagerRegistry;


class DonationApplicationEmbApplicationController extends AbstractController
{
    /** @var ConfigManager */
    private $configManager;

    /** @var ManagerRegistry */
    private $doctrine;

    public function __construct(ConfigManager $configManager, ManagerRegistry $doctrine)
    {
        $this->configManager = $configManager;
        $this->doctrine = $doctrine;
    }
    /**
     * @Route("/", name="edi_donation_application_frontend", options={"frontend"=true})
     * @Layout
     *
     * return array|RedirectResponse
     */
    public function createAction(Request $request, StipulationsGroupsHelper $groupsHelper, DonationApplicationPagingButtonsHelper $buttonsHelper)
    {
        $this->logger = $this->container->get('logger');
        $this->logger->info(__LINE__ . "::" . __METHOD__ . "::" . __FILE__);
        $emb_application = new EmbApplication();
/*        $form = $this->createForm(
            DonationApplicationEmbApplicationType::class,
            $emb_application,
            ["compound"=>true]
        );
        $form->handleRequest($request); */
        return $this->update($emb_application, $request, $groupsHelper, $buttonsHelper);
    }

    /**
     * @Route("/update/{applicationId}", name="edi_donation_application_frontend_update", options={"frontend"=true}, requirements={"id"="\d+"})
     * @Layout
     *
     * return array|RedirectResponse
     */
    public function updateAction(int $applicationId, Request $request, StipulationsGroupsHelper $groupsHelper, DonationApplicationPagingButtonsHelper $buttonsHelper)
    {
        $em = $this->getDoctrine()->getManager();
        $emb_application = $em->getRepository(EmbApplication::class)->find($applicationId);
        $stipulations = $emb_application->getStipulations();

        return $this->update($emb_application, $request, $groupsHelper, $buttonsHelper);
    }

    private function update(EmbApplication $emb_application, Request $request, StipulationsGroupsHelper $groupsHelper, DonationApplicationPagingButtonsHelper $buttonsHelper)
    {

        //fill the applicaiton with dummy blanks because of the not null in the DB columns. Is there a better way to do this in Symfony or ORO?
        //$emb_application->setMarriageStipulations($groupsHelper->createMarriageStipuations());

        //$serializer = SerializerBuilder::create()->build();
        //$jsonContent = $serializer->serialize($emb_application, 'json');

        //return new Response($jsonContent);
        //TODO: New code using service to create Stipulation Types

        $this->logger = $this->container->get('logger');
        $this->logger->info(__LINE__ . "::" . __METHOD__ . "::" . __FILE__);

        $emb_application = $groupsHelper->setLocationandEducationStipulations($emb_application);

        $emb_application->setMarriageStipulations($groupsHelper->createMarriageStipuations($emb_application));
        $emb_application->setReligionStipulations($groupsHelper->createReligionStipuations($emb_application));
        $emb_application->setRaceStipulations($groupsHelper->createRaceStipuations($emb_application));
        $form = $this->createForm(
            DonationApplicationEmbApplicationType::class,
            $emb_application
        );

/*        //Add Save button
        $form->add('saveSubmit', SubmitType::class, [
            'attr' => ['class' => 'save'],
        ]);
        //Add Next button
        $form->add('nextSubmit', SubmitType::class, [
            'attr' => ['class' => 'save'],
        ]);*/
        $currentAction = $request->get('_route');
//Removed for testing = uncomment below line JDA
        $form = $buttonsHelper->addPagingButtons($currentAction, $form);

        // Remove stuff from form that does not need to be shown
        $form->remove('id')
            ->remove('embNumber')
            ->remove('datetimeCreated') //not null
            ->remove('initials') //not null
            ->remove('email')
            ->remove('photo1') //not null
            ->remove('photo2') //not null
            ->remove('photo1Description')
            ->remove('photo2Description')
            ->remove('includePhoto') //not null
            ->remove('includePhotoOffice') //not null
            ->remove('includePhotoWebPrint') //not null
            ->remove('embSrcOwnPi2')
            ->remove('embSrcDonorSpermPi2')
            ->remove('embSrcDonorEggsPi2')
            ->remove('embSrcMixturePi2')
            ->remove('agreeBloodReTestPi1')  //not null
            ->remove('agreeBloodReTestPi2') //not null
            ->remove('pastEmbryoDonor') //not null
            ->remove('otherFacilities') //not null
            ->remove('bestQualities') //not null
            ->remove('srmsComments') //not null
            ->remove('sayToRecipient') //not null
            ->remove('informationTrueAccurate') //not null
            ->remove('signedNameHusband') //not null
            ->remove('signedNameWife') //not null
            ->remove('signedDate') //not null
            //->remove('otherLimitingStipulations')
            ->remove('onReserve') //not null
            ->remove('isActive') //not null
            ->remove('datetimeModified')
            ->remove('medicalStaffComments')
            ->remove('medicalDirectorComments')
            ->remove('drReviewDatetime')
            ->remove('isArchive') //not null
            ->remove('datetimeAcrhived');
        //->add('userId')


        //$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType', $emb_application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $nextAction = $buttonsHelper->checkClickedPagingButtons($currentAction,$form);

            if ($emb_application->getDatetimeCreated() === null) {
                $emb_application->setDatetimeCreated(new \DateTime());
            }
            if ($emb_application->getEmail() === null) {
                $emb_application->setEmail("");
            }
            if($emb_application->getEmbSrcOwn() === null){
                $emb_application->setEmbSrcOwn("");
            }
            if ($emb_application->getEmbSrcOwnPi2() === null) {
                $emb_application->setEmbSrcOwnPi2("");
            }

            if ($emb_application->getDatetimeModified() === null) {
                $emb_application->setDatetimeModified(new \DateTime());
            }

            if ($emb_application->getInitials() === null) {
                $emb_application->setInitials("");
            }
            if ($emb_application->getPhoto1() === null) {
                $emb_application->setPhoto1("");
            }
            if ($emb_application->getPhoto2() === null) {
                $emb_application->setPhoto2("");
            }
            if ($emb_application->getIncludePhoto() === null) {
                $emb_application->setIncludePhoto("");
            }
            if ($emb_application->getIncludePhotoOffice() === null) {
                $emb_application->setIncludePhotoOffice("");
            }
            if ($emb_application->getIncludePhotoWebPrint() === null) {
                $emb_application->setIncludePhotoWebPrint("");
            }
            if($emb_application->getAgreeBloodReTest() === null){
                $emb_application->setAgreeBloodReTest("No");
            }
            if ($emb_application->getAgreeBloodReTestPi1() === null) {
                $emb_application->setAgreeBloodReTestPi1("");
            }
            if ($emb_application->getAgreeBloodReTestPi2() === null) {
                $emb_application->setAgreeBloodReTestPi2("");
            }
            if ($emb_application->getPastEmbryoDonor() === null) {
                $emb_application->setPastEmbryoDonor("");
            }
            if ($emb_application->getOtherFacilities() === null) {
                $emb_application->setOtherFacilities("");
            }
            if ($emb_application->getBestQualities() === null) {
                $emb_application->setBestQualities("");
            }
            if ($emb_application->getSrmsComments() === null) {
                $emb_application->setSrmsComments("");
            }
            if ($emb_application->getSayToRecipient() === null) {
                $emb_application->setSayToRecipient("");
            }
            if ($emb_application->getInformationTrueAccurate() === null) {
                $emb_application->setInformationTrueAccurate(0);
            }
            if ($emb_application->getSignedNameHusband() === null) {
                $emb_application->setSignedNameHusband("");
            }
            if ($emb_application->getSignedNameWife() === null) {
                $emb_application->setSignedNameWife("");
            }
            if ($emb_application->getSignedDate() === null) {
                $emb_application->setSignedDate("");
            }
            if($emb_application->getOtherLimitingStipulations() === null){
                $emb_application->setOtherLimitingStipulations("");
            }
            if ($emb_application->getOnReserve() === null) {
                $emb_application->setOnReserve(0);
            }
            if ($emb_application->isActive() === null) {
                $emb_application->setIsActive(false);
            }
            if($emb_application->getMhpOption() === null){
                $emb_application->setMhpOption("");
            }
            if($emb_application->getPtpIdpOption() === null){
                $emb_application->setPtpIdpOption("");
            }
            if($emb_application->getMhpDonorInfo() === null){
                $emb_application->setMhpDonorInfo("");
            }
            if($emb_application->getDonorSingleName() === null){
                $emb_application->setDonorSingleName("");
            }
            if($emb_application->getDonorSingleSignature() === null){
                $emb_application->setDonorSingleSignature("");
            }
            if($emb_application->getDonorFirstPartnerName() === null){
                $emb_application->setDonorFirstPartnerName("");
            }
            if($emb_application->getDonorFirstPartnerSignature() === null){
                $emb_application->setDonorFirstPartnerSignature("");
            }
            if($emb_application->getDonorSecondPartnerName() === null) {
                $emb_application->setDonorSecondPartnerName("");
            }
            if($emb_application->getDonorSecondPartnerSignature() === null) {
                $emb_application->setDonorSecondPartnerSignature("");
            }
            if($emb_application->getIdInfoWhen() === null) {
                $emb_application->setIdInfoWhen(0);
            }
            if($emb_application->getEmbCharity() === null) {
                $emb_application->setEmbCharity("");
            }
            if($emb_application->getUserId() === null){

                $userId = $this->configManager->get('oro_customer.default_customer_owner');

                /** @var CustomerUser $customerUser */
                $customerUser = $this->doctrine->getManagerForClass(CustomerUser::class)->find(CustomerUser::class, $userId);

                if ($customerUser) {
                    $emb_application->setUserId($customerUser);
                }

//                $emb_application->setUserId(-1);
            }
            if($emb_application->getIsArchive() === null) {
                $emb_application->setIsArchive(0);
            }

            $emb_application->addStipulation($emb_application->getLocationStipulation());
            $emb_application->addStipulation($emb_application->getEducationStipulation());

            foreach($emb_application->getMarriageStipulations() as $i => $stipulation) {
                $emb_application->addStipulation($stipulation);
            }
            foreach($emb_application->getReligionStipulations() as $i => $stipulation) {
                $emb_application->addStipulation($stipulation);
            }
            foreach($emb_application->getRaceStipulations() as $i => $stipulation) {
                $emb_application->addStipulation($stipulation);
            }
/*            foreach($emb_application->getStipulations() as $i => $stipulation){
                if($stipulation->getData())
                    $stipulation->setDatetimeModified(new \DateTime());
                else
                    $emb_application->removeStipulation($stipulation);
            }
*/
            $params = $request->request->all();
            $params_marriage_stipulations = $params["donation_application_emb_application"]["marriage_stipulations"];
            $params_religion_stipulations = $params["donation_application_emb_application"]["religion_stipulations"];
            $params_race_stipulations = $params["donation_application_emb_application"]["race_stipulations"];
//            $params_location_stipulations = $params["donation_application_emb_application"]["location_stipulation"];
//            $params_education_stipulations = $params["donation_application_emb_application"]["education_stipulation"];
            $params_stipulations = array_merge($params_marriage_stipulations, $params_religion_stipulations, $params_race_stipulations /*, $params_location_stipulations, $params_education_stipulations*/);

            //flatten the array
            $params_stipulations_flattened = array();
            foreach($params_stipulations as $params_stipulation) {
                if(array_key_exists("stipulation",$params_stipulation)){
                    $params_stipulations_flattened[] = $params_stipulation["stipulation"][0];
                }
            }

            foreach($emb_application->getStipulations() as $i => $stipulation){
                if(in_array($stipulation->getStipulation(),$params_stipulations_flattened) || $stipulation->getStipulationType() === EDIConstants::STIPULATION_TYPE_EDUCATION || $stipulation->getStipulationType() === EDIConstants::STIPULATION_TYPE_LOCATION)
                    $stipulation->setDatetimeModified(new \DateTime());
                else
                    $emb_application->removeStipulation($stipulation);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($emb_application);
            $entityManager->flush();
            $applicationId = $emb_application->getId();
            $routeName = $request->attributes->get('_route');
            $cleanedRouteName = substr($routeName, 0, strrpos($routeName, "_"));

            if($nextAction === $cleanedRouteName) {
                $action = "_update";
            } else {
                $action = "";
            }
            return $this->redirectToRoute($nextAction.$action,['applicationId'=>$applicationId]);

/*            return $this->get('oro_ui.router')->redirectAfterSave(
                array(
                    'route' => $nextAction,
                    'parameters' => array('id' => $emb_application->getId()),
                ),
                array('route' => $nextAction),
                $emb_application
            );
*/
        }

        /*		$result =  $this->get('oro_form.update_handler')->update(
            $emb_application,
            $form,
            $this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
        );
*/
        $returnThis = ['data' => ['donation_application_form' => $form->createView(), 'entity' => $emb_application]];

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

    public function donationPageAction(Request $request)
    {
//		$logger = $this->get('logger');
//		$logger->debug("Fuck it");
        $emb_application = new EmbApplication();
//		$logger->debug("Fuck it 2");
        $form = $this->createForm(
            DonationApplicationEmbApplicationType::class,
            $emb_application
        );
//		$logger->debug("Fuck it 3");
        $result = $this->get('oro_form.update_handler')->update(
            $emb_application,
            $form,
            $this->get('translator')->trans('edi.donationapplication.form.embapplication.sent')
        );
//		$logger->debug("Fuck it 4");
        if ($result instanceof Response) {
            return $result;
        }
//		$logger->debug("Fuck it 5");
        //return ['data' => ['contact_us_request_form' => $form->createView()]];
//		$logger->debug("Raw Form name: " . $form->getName());
//		$logger->debug("Raw Form view: " . json_encode($form->createView()));

        $returnThis = ['data' => ['donation_application_form' => $form->createView()]];
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
}