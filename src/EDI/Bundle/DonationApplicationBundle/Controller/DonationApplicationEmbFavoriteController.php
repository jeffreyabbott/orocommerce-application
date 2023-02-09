<?php
namespace EDI\Bundle\DonationApplicationBundle\Controller;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbFavorite;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Symfony\Component\HttpFoundation\Request;



class DonationApplicationEmbFavoriteController extends AbstractController
{
	/**
	 * @Route("/", name="donation.application_favorite_index") //Fix this
	 * @Template("@DonationApplication/EmbFavorite/index.html.twig")
	 * @Acl(
	 *     id="donation.application_favorite_view",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbFavorite",
	 *     permission="VIEW"
	 * )
	 */
	public function indexAction()
	{
		return array('gridName' => 'donation-application-favorite-grid');
	}

	/**
	 * @Route("/create", name="donation.application_favorite_create")
	 * @Template("@DonationApplication/EmbFavorite/update.html.twig")
	 * @Acl(
	 *     id="donation.application_favorite_create",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbFavorite",
	 *     permission="CREATE"
	 * )
	 */
	public function createAction(Request $request)
	{
		return $this->update(new EmbFavorite(), $request);
	}

	/**
	 * @Route("/update/{id}", name="donation.application_favorite_update", requirements={"id":"\d+"}, defaults={"id":0})
	 * @Template()
	 * @Acl(
	 *     id="donation.application_favorite_update",
	 *     type="entity",
	 *     class="DonationApplicationBundle:EmbFavorite",
	 *     permission="EDIT"
	 * )
	 */
	public function updateAction(EmbFavorite $emb_favorite, Request $request)
	{
		return $this->update($emb_favorite, $request);
	}

	private function update(EmbFavorite $emb_favorite, Request $request)
	{
		$form = $this->get('form.factory')->create('EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationFavoriteType', $emb_favorite);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($emb_favorite);
			$entityManager->flush();

			return $this->get('oro_ui.router')->redirectAfterSave(
				array(
					'route' => 'donation.application_favorite_update',
					'parameters' => array('id' => $emb_favorite->getId()),
				),
				array('route' => 'donation.application_favorite_index'),
				$emb_favorite
			);
		}

		return array(
			'entity' => $emb_favorite,
			'form' => $form->createView(),
		);
	}

}
