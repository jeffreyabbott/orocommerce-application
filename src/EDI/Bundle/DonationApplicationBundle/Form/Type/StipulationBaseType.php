<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class StipulationBaseType  extends AbstractType
{
    private $stipulation_text;
    private $stipulation_type;
    private $is_multiple;
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->stipulation_text= $options['stipulation_text'];
        $builder
            ->add('id', HiddenType::class)
            ->add('stipulationType',HiddenType::class, [
                    'data' => $this->stipulation_type]
            )
            ->add('stipulation', ChoiceType::class, [
                'choices' => [$this->stipulation_text => $this->stipulation_text],
                'choice_value' =>
                    'stipulation',
                'expanded' => true,
                'multiple' => $this->is_multiple,
                'mapped' => false,
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation',
            'data_class' => 'EDI\Bundle\DonationApplicationBundle\Form\Model\StipulationFormModel',
            'stipulation_text' => null,
            'stipulation_type' => null,
            'is_multiple' => false,
        ));
    }

}