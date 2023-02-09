<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbContactInfo;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbContactInfoController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_contactinfo_index") //Fix this
	 * @Template("@DonationApplication/EmbContactInfo/index.html.twig")
	 * @Acl(
	 *     id="donation.application_contactinfo_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbContanctInfo",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-contactinfo-grid');
	}

	/**
	 * @Route("/create", name="donation.application_contactinfo_create")
	 * @Template("@DonationApplication/EmbContactInfo/update.html.twig")
	 * @Acl(
	 *     id="donation.application_contactinfo_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbFavorite",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbContactInfo(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_contactinfo_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_contactinfo_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbFavorite",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbContactInfo $emb_contactinfo, Request $request)
	{
		return $this->update($emb_contactinfo, $request);
	}

	private function update(EmbContactInfo $emb_contactinfo, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationContactInfoType', $emb_contactinfo);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_contactinfo);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_contactinfo_update',
					'parameters' => array('id' => $emb_contactinfo->getId()),
				),
				array('route' => 'donation.application_contactinfo_index'),
				$emb_contactinfo
			);
		}

		return array(
			'entity' => $emb_contactinfo,
			'form' => $form->createView(),
		);
	}

}
