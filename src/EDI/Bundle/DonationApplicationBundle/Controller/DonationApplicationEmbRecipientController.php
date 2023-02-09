<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbRecipient;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbRecipientController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_recipient_index") //Fix this
	 * @Template("@DonationApplication/EmbRecipient/index.html.twig")
	 * @Acl(
	 *     id="donation.application_recipient_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbRecipient",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-recipient-grid');
	}

	/**
	 * @Route("/create", name="donation.application_recipient_create")
	 * @Template("@DonationApplication/EmbRecipient/update.html.twig")
	 * @Acl(
	 *     id="donation.application_recipient_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbRecipient",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbRecipient(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_recipient_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_recipient_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbRecipient",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbRecipient $emb_recipient, Request $request)
	{
		return $this->update($emb_recipient, $request);
	}

	private function update(EmbRecipient $emb_recipient, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationRecipientType', $emb_recipient);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_recipient);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_recipient_update',
					'parameters' => array('id' => $emb_recipient->getId()),
				),
				array('route' => 'donation.application_recipient_index'),
				$emb_recipient
			);
		}

		return array(
			'entity' => $emb_recipient,
			'form' => $form->createView(),
		);
	}

}
