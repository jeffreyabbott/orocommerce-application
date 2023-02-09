<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;

use EDI\Bundle\DonationApplicationBundle\Form\Transformer\ChoiceToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArrayToTextChoice extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new ChoiceToStringTransformer());
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'invalid_message' => 'ArrayToTextChoice no valid.',
        ));
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }

}