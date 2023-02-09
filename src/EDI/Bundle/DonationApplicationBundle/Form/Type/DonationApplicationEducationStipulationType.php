<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialAndEduHistCombo;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbLocationStipulation;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use EDI\Bundle\DonationApplicationBundle\Entity\StipulationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationStipulationType;


class DonationApplicationEducationStipulationType extends AbstractType
{



	public function buildForm(FormBuilderInterface $builder, array $options)
    {

        foreach (EDIConstants::EDUCATIONS as $key => $value) {
            $choices[$key] = $value;
        }
        $builder->add('id', HiddenType::class)
            ->add('stipulationType', HiddenType::class, [
                'data' => EDIConstants::STIPULATION_TYPE_EDUCATION,
            ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($builder, $choices) {
            $entity = $event->getData();
            $form = $event->getForm();
            $form->add('stipulation', ChoiceType::class, [
                'label' => false,
                'expanded' => true,
                'multiple' => false,
                'attr' => ['name' => 'emb_education_stipulation'],
                'choice_label' => function ($choice, $key, $value) {
                    return strip_tags($key);
                },
                'choices' => $choices,
//                'data' => $key,
                'choice_attr' => function () use ($entity) {
                    if ($entity != null)
                        return ['checked' => $entity->getId() != null];
                    else
                        return array();
                },
            ]);

            //TODO Add ability to populate data from form
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
		return 'donation_application_education_stipulation';
	}
}