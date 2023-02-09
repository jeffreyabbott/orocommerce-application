<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class DonationApplicationStipulationType  extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('id', HiddenType::class)
			->add('stipulationType',HiddenType::class);

		$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  use ($builder){
			$entity = $event->getData();
			$form = $event->getForm();


            $form->add('stipulation', ChoiceType::class, [
				'choices' => [$entity],
				'choice_value' =>
                    'stipulation',
				'choice_label' => function(?EmbStipulation $stipulation) {
					return $stipulation ? $stipulation->getStipulation() : '';
				},
				'expanded' => true,
				'multiple' => true,
				'mapped' => false,
                'choice_attr' => function () use ($entity){
                    return ['checked' => $entity->getId() != null];
                }
 			]);
		});
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation',
		));
	}

	public function getName()
	{
		return 'donation_application_stipulation';
	}
}