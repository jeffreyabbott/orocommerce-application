<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use EDI\Bundle\DonationApplicationBundle\Entity\StipulationType;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbApplicationController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_index")
	 * @Template("@DonationApplication/EmbApplication/index.html.twig")
	 * @Acl(
	 *     id="donation.application_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbApplication",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-grid');
	}

	/**
	 * @Route("/create", name="donation.application_create")
	 * @Template("@DonationApplication/EmbApplication/update.html.twig")
	 * @Acl(
	 *     id="donation.application_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbApplication",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		$emb_application = new EmbApplication();
		$emb_stipulation_type_marital = new StipulationType();
		$emb_stipulation_type_religion = new StipulationType();
		$emb_stipulation_type_race = new StipulationType();
		$emb_stipulation_type_education = new StipulationType();
		$emb_stipulation_type_location = new StipulationType();

		$repository = $this->getDoctrine()->getRepository(StipulationType::class);


		$emb_stipulation_type_marital = $repository->find(1);
		if (!$emb_stipulation_type_marital) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 1
			);
		}
		$emb_stipulation_type_religion = $repository->find(2);
		if (!$emb_stipulation_type_religion) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 2
			);
		}
		$emb_stipulation_type_race = $repository->find(3);
		if (!$emb_stipulation_type_race) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 3
			);
		}
		$emb_stipulation_type_education = $repository->find(4);
		if (!$emb_stipulation_type_education) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 4
			);
		}
		$emb_stipulation_type_location = $repository->find(5);
		if (!$emb_stipulation_type_location) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 5
			);
		}

/*		$emb_stipulation_type_other = $repository->find(6);
		if (!$emb_stipulation_type_other) {
			throw $this->createNotFoundException(
				'No stipulation found for id ' . 6
			);
		}
*/
		//Married Stipulations
		//Married Stipulation - Married
		//	Married Heterosexuals
		$emb_stipulation_married_heterosexuals = new EmbStipulation();
		$emb_stipulation_married_heterosexuals->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_married_heterosexuals->setStipulation("Married Heterosexuals");
		$emb_application->getStipulations()->add($emb_stipulation_married_heterosexuals);

		//	Married Lesbians
		$emb_stipulation_married_lesbians = new EmbStipulation();
		$emb_stipulation_married_lesbians->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_married_lesbians->setStipulation("Married Lesbians");
		$emb_application->getStipulations()->add($emb_stipulation_married_lesbians);

		//  Married Homosexuals
		$emb_stipulation_married_homosexuals = new EmbStipulation();
		$emb_stipulation_married_homosexuals->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_married_homosexuals->setStipulation("Married Homosexuals");
		$emb_application->getStipulations()->add($emb_stipulation_married_homosexuals);

		//Married Stipulation - Unmarried but with Partner
		//  Unmarried Heterosexual partners
		$emb_stipulation_unmarried_heterosexuals = new EmbStipulation();
		$emb_stipulation_unmarried_heterosexuals->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_unmarried_heterosexuals->setStipulation("Unmarried Heterosexual partners");
		$emb_application->getStipulations()->add($emb_stipulation_unmarried_heterosexuals);

		//  Unmarried Lesbian partners
		$emb_stipulation_unmarried_lesbians = new EmbStipulation();
		$emb_stipulation_unmarried_lesbians->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_unmarried_lesbians->setStipulation("Unmarried Lesbian partners");
		$emb_application->getStipulations()->add($emb_stipulation_unmarried_lesbians);

		//	Unmarried Homosexual partners
		$emb_stipulation_unmarried_homosexuals = new EmbStipulation();
		$emb_stipulation_unmarried_homosexuals->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_unmarried_homosexuals->setStipulation("Unmarried Homosexual partners");
		$emb_application->getStipulations()->add($emb_stipulation_unmarried_homosexuals);

		//Single (by choice, divorced or widowed)
		//	Single & Heterosexual
		$emb_stipulation_single_heterosexual = new EmbStipulation();
		$emb_stipulation_single_heterosexual->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_single_heterosexual->setStipulation("Single & Heterosexual");
		$emb_application->getStipulations()->add($emb_stipulation_single_heterosexual);

		//	Single & Lesbian
		$emb_stipulation_single_lesbian = new EmbStipulation();
		$emb_stipulation_single_lesbian->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_single_lesbian->setStipulation("Single & Lesbian");
		$emb_application->getStipulations()->add($emb_stipulation_single_lesbian);

		//	Single & Homosexual
		$emb_stipulation_single_homosexual = new EmbStipulation();
		$emb_stipulation_single_homosexual->setEmbStipulationType($emb_stipulation_type_marital);
		$emb_stipulation_single_homosexual->setStipulation("Single & Homosexual");
		$emb_application->getStipulations()->add($emb_stipulation_single_homosexual);

		//Race:
		//  Mixed Race
		$emb_stipulation_race_mixed_race = new EmbStipulation();
		$emb_stipulation_race_mixed_race->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_mixed_race->setStipulation("Mixed Race");
		$emb_application->getStipulations()->add($emb_stipulation_race_mixed_race);
		//	African-American
		$emb_stipulation_race_african_american = new EmbStipulation();
		$emb_stipulation_race_african_american->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_african_american->setStipulation("African-American");
		$emb_application->getStipulations()->add($emb_stipulation_race_african_american);
		//	Arctic
		$emb_stipulation_race_artic = new EmbStipulation();
		$emb_stipulation_race_artic->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_artic->setStipulation("Artic");
		$emb_application->getStipulations()->add($emb_stipulation_race_artic);
		//	Asian
		$emb_stipulation_race_asian = new EmbStipulation();
		$emb_stipulation_race_asian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_asian->setStipulation("Asian");
		$emb_application->getStipulations()->add($emb_stipulation_race_asian);
		//	Caucasian
		$emb_stipulation_race_caucasian = new EmbStipulation();
		$emb_stipulation_race_caucasian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_caucasian->setStipulation("Caucasian");
		$emb_application->getStipulations()->add($emb_stipulation_race_caucasian);
		//	Hispanic
		$emb_stipulation_race_hispanic = new EmbStipulation();
		$emb_stipulation_race_hispanic->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_hispanic->setStipulation("Hispanic");
		$emb_application->getStipulations()->add($emb_stipulation_race_hispanic);
		//	Indigenous Australian
		$emb_stipulation_race_indigenous_australian = new EmbStipulation();
		$emb_stipulation_race_indigenous_australian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_indigenous_australian->setStipulation("Indigenous Australian");
		$emb_application->getStipulations()->add($emb_stipulation_race_indigenous_australian);
		//	Native American
		$emb_stipulation_race_native_american = new EmbStipulation();
		$emb_stipulation_race_native_american->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_native_american->setStipulation("Native American");
		$emb_application->getStipulations()->add($emb_stipulation_race_native_american);
		//	Pacific
		$emb_stipulation_race_pacific = new EmbStipulation();
		$emb_stipulation_race_pacific->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_pacific->setStipulation("Pacific");
		$emb_application->getStipulations()->add($emb_stipulation_race_pacific);
		//	North East Asian
		$emb_stipulation_race_north_east_asian = new EmbStipulation();
		$emb_stipulation_race_north_east_asian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_north_east_asian->setStipulation("North East Asian");
		$emb_application->getStipulations()->add($emb_stipulation_race_north_east_asian);
		//	South East Asian
		$emb_stipulation_race_south_east_asian = new EmbStipulation();
		$emb_stipulation_race_south_east_asian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_south_east_asian->setStipulation("South East Asian");
		$emb_application->getStipulations()->add($emb_stipulation_race_south_east_asian);
		//	West African, Bushmen, Ethiopian
		$emb_stipulation_race_west_african_bushmen_ethiopian = new EmbStipulation();
		$emb_stipulation_race_west_african_bushmen_ethiopian->setEmbStipulationType($emb_stipulation_type_race);
		$emb_stipulation_race_west_african_bushmen_ethiopian->setStipulation("West African, Bushmen, Ethiopian");
		$emb_application->getStipulations()->add($emb_stipulation_race_west_african_bushmen_ethiopian);

		//Religion
		//	Agnostic
		$emb_stipulation_religion_agnostic = new EmbStipulation();
		$emb_stipulation_religion_agnostic->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_agnostic->setStipulation("Agnostic");
		$emb_application->getStipulations()->add($emb_stipulation_religion_agnostic);

		//	Atheist
		$emb_stipulation_religion_atheist = new EmbStipulation();
		$emb_stipulation_religion_atheist->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_atheist->setStipulation("Atheist");
		$emb_application->getStipulations()->add($emb_stipulation_religion_atheist);

		//	Buddhist
		$emb_stipulation_religion_buddhist = new EmbStipulation();
		$emb_stipulation_religion_buddhist->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_buddhist->setStipulation("Buddhist");
		$emb_application->getStipulations()->add($emb_stipulation_religion_buddhist);

		//	Catholic
		$emb_stipulation_religion_catholic = new EmbStipulation();
		$emb_stipulation_religion_catholic->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_catholic->setStipulation("Catholic");
		$emb_application->getStipulations()->add($emb_stipulation_religion_catholic);

		//	Christian
		$emb_stipulation_religion_christian = new EmbStipulation();
		$emb_stipulation_religion_christian->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_christian->setStipulation("Christian");
		$emb_application->getStipulations()->add($emb_stipulation_religion_christian);

		//	Hindu
		$emb_stipulation_religion_hindu = new EmbStipulation();
		$emb_stipulation_religion_hindu->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_hindu->setStipulation("Hindu");
		$emb_application->getStipulations()->add($emb_stipulation_religion_hindu);

		//	Jewish
		$emb_stipulation_religion_jewish = new EmbStipulation();
		$emb_stipulation_religion_jewish->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_jewish->setStipulation("Jewish");
		$emb_application->getStipulations()->add($emb_stipulation_religion_jewish);
		//	Muslim/Islam
		$emb_stipulation_religion_muslim = new EmbStipulation();
		$emb_stipulation_religion_muslim->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_muslim->setStipulation("Muslim/Islam");
		$emb_application->getStipulations()->add($emb_stipulation_religion_muslim);
		//	No Religion
		$emb_stipulation_religion_no_religion = new EmbStipulation();
		$emb_stipulation_religion_no_religion->setEmbStipulationType($emb_stipulation_type_religion);
		$emb_stipulation_religion_no_religion->setStipulation("No Religion");
		$emb_application->getStipulations()->add($emb_stipulation_religion_no_religion);

		// Eduction Level
		//	High School
		//		Some High School Eduction
		$emb_stipulation_education_some_high_school = new EmbStipulation();
		$emb_stipulation_education_some_high_school->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_some_high_school->setStipulation("Some High School Eduction");
		$emb_application->getStipulations()->add($emb_stipulation_education_some_high_school);

		//		High School Graduate
		$emb_stipulation_education_high_school = new EmbStipulation();
		$emb_stipulation_education_high_school->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_high_school->setStipulation("High School Graduate");
		$emb_application->getStipulations()->add($emb_stipulation_education_high_school);

		//	College
		//		Some Associate's Education
		$emb_stipulation_education_some_associates = new EmbStipulation();
		$emb_stipulation_education_some_associates->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_some_associates->setStipulation("Some Associate's Education");
		$emb_application->getStipulations()->add($emb_stipulation_education_some_associates);

		//		Associates Degree, Graduate
		$emb_stipulation_education_associates = new EmbStipulation();
		$emb_stipulation_education_associates->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_associates->setStipulation("Associates Degree, Graduate");
		$emb_application->getStipulations()->add($emb_stipulation_education_associates);

		//		Some College Education
		$emb_stipulation_education_some_college = new EmbStipulation();
		$emb_stipulation_education_some_college->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_some_college->setStipulation("Some College Education");
		$emb_application->getStipulations()->add($emb_stipulation_education_some_college);

		//		College Degree, Graduate
		$emb_stipulation_education_college = new EmbStipulation();
		$emb_stipulation_education_college->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_college->setStipulation("College Degree, Graduate");
		$emb_application->getStipulations()->add($emb_stipulation_education_college);

		//	Advanced Degree:
		//		Some Master's Education
		$emb_stipulation_education_some_masters = new EmbStipulation();
		$emb_stipulation_education_some_masters->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_some_masters->setStipulation("Some Master's Education");
		$emb_application->getStipulations()->add($emb_stipulation_education_some_masters);

		//		Masters Degree, Graduate
		$emb_stipulation_education_masters = new EmbStipulation();
		$emb_stipulation_education_masters->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_masters->setStipulation("Masters Degree, Graduate");
		$emb_application->getStipulations()->add($emb_stipulation_education_masters);

		//		Some Professional Education (e.g. Ph.D., M.D., D.O....)
		$emb_stipulation_education_some_professional = new EmbStipulation();
		$emb_stipulation_education_some_professional->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_some_professional->setStipulation("Some Professional Education (e.g. Ph.D., M.D., D.O....)");
		$emb_application->getStipulations()->add($emb_stipulation_education_some_professional);

		//		Professional Degree, Graduate (e.g. Ph.D., M.D., D.O....)
		$emb_stipulation_education_professional = new EmbStipulation();
		$emb_stipulation_education_professional->setEmbStipulationType($emb_stipulation_type_education);
		$emb_stipulation_education_professional->setStipulation("Professional Degree, Graduate (e.g. Ph.D., M.D., D.O....)");
		$emb_application->getStipulations()->add($emb_stipulation_education_professional);

		// Location:
		//      Does not matter
		$emb_stipulation_location_does_not_matter = new EmbStipulation();
		$emb_stipulation_location_does_not_matter->setEmbStipulationType($emb_stipulation_type_location);
		$emb_stipulation_location_does_not_matter->setStipulation("Does not matter");
		$emb_application->getStipulations()->add($emb_stipulation_location_does_not_matter);

		//      Not in the city in which I/we currently live (e.g., Atlanta, St. Louis....)
		$emb_stipulation_location_not_city = new EmbStipulation();
		$emb_stipulation_location_not_city->setEmbStipulationType($emb_stipulation_type_location);
		$emb_stipulation_location_not_city->setStipulation("Not in the city in which I/we currently live (e.g., Atlanta, St. Louis....)");
		$emb_application->getStipulations()->add($emb_stipulation_location_not_city);

		//      Not in the state or province in which I/we currently live (e.g., Illinois, Quebec....)
		$emb_stipulation_location_not_state = new EmbStipulation();
		$emb_stipulation_location_not_state->setEmbStipulationType($emb_stipulation_type_location);
		$emb_stipulation_location_not_state->setStipulation("Not in the state or province in which I/we currently live (e.g., Illinois, Quebec....)");
		$emb_application->getStipulations()->add($emb_stipulation_location_not_state);

		//      Not in the multi-state region in which I/we currently live (e.g., Pacific Northwest, Midwest...)
		$emb_stipulation_location_not_multi_state = new EmbStipulation();
		$emb_stipulation_location_not_multi_state->setEmbStipulationType($emb_stipulation_type_location);
		$emb_stipulation_location_not_multi_state->setStipulation("Not in the multi-state region in which I/we currently live (e.g., Pacific Northwest, Midwest...)");
		$emb_application->getStipulations()->add($emb_stipulation_location_not_multi_state);

		//Other
        //Removed these as they are stored into the emb_application table in column: other_limiting_stipulations
/*		$emb_stipulation_other = new EmbStipulation();
		$emb_stipulation_other->setEmbStipulationType($emb_stipulation_type_other);
		$emb_stipulation_other->setStipulation("");
		$emb_application->getStipulations()->add($emb_stipulation_other);
*/

		$serializer = SerializerBuilder::create()->build();
		$jsonContent = $serializer->serialize($emb_application, 'json');
		//return new Response($jsonContent);
		return $this->update($emb_application, $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbApplication",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbApplication $emb_application, Request $request)
	{
		return $this->update($emb_application, $request);
	}

	private function update(EmbApplication $emb_application, Request $request)
	{
		//$form = $this->get('form.factory')->create('inventory_vehicle', $vehicle);
		$form = $this->get('form.factory')->create( 'EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationEmbApplicationType', $emb_application);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_application);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_update',
					'parameters' => array('id' => $emb_application->getId()),
				),
				array('route' => 'donation.application_index'),
				$emb_application
			);
		}

		return array(
			'entity' => $emb_application,
			'form' => $form->createView(),
		);
	}

	/**
	 * @Route("/{id}", name="donation.application_view", requirements={"id"="\d+"})
	 * @Template("@DonationApplication/EmbApplication/view.html.twig")
	 * @AclAncestor("donation.applicaiton_view")
	 */
	public function viewAction(EmbApplication $emb_application)
	{
		return array(
			'entity' => $emb_application,
		);
	}

    /**
     * @Route("/testdialog", name="donation.application_testdialog")
     * @Template("@DonationApplication/EmbApplication/index.html.twig")
     * @Acl(
     *     id="donation.application_view",
     *     type="entity",
     *     class="DonationApplicationBundle:EmbApplication",
     *     permission="VIEW"
     * )
     */
    public function testdialog()
    {
        return array('gridName' => 'donation-application-grid');
    }
}
