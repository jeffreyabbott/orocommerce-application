<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialAndEduHistCombo;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbLocationStipulation;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use EDI\Bundle\DonationApplicationBundle\Entity\StipulationType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationStipulationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class DonationApplicationLocationStipulationType extends AbstractType
{



	public function buildForm(FormBuilderInterface $builder, array $options)
	{
        $choices = array();
        foreach(EDIConstants::LOCATIONS as $location) {
            $choices[$location] = $location;
        }
		$builder
            ->add('id', HiddenType::class)
            ->add('stipulationType',HiddenType::class,[
                'data' => EDIConstants::STIPULATION_TYPE_LOCATION,
            ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  use ($builder, $choices) {
            $entity = $event->getData();
            $form = $event->getForm();

            $form->add('stipulation', ChoiceType::class, [
                'label' => false,
                'expanded' => true,
                'multiple' => false,
                'attr' => ['name' => 'emb_location_stipulation'],
                'choice_label' => function ($choice, $key, $value) {
                    if (true === $choice) {
                        return 'Definitely!';
                    }

                    return strip_tags($key);

                    // or if you want to translate some key
                    //return 'form.choice.'.$key;
                },
                'choices' => $choices,
                'choice_attr' => function () use ($entity) {
                    if($entity !=null)
                        return ['checked' => $entity->getId() != null];
                    else
                        return array();
                },
            ]);
        });

    }
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => EmbStipulation::class,
		));
	}

	public function getName()
	{
		return 'donation_application_location_stipulation';
	}
}