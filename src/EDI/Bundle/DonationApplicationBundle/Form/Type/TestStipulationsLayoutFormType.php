<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;



use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Helper\LoggerTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class TestStipulationsLayoutFormType extends AbstractType
{
    use LoggerTrait;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //Add generated stipulations

        $married = EDIConstants::MARITAL_STATUS['Married'];
        $unmarried = EDIConstants::MARITAL_STATUS['Unmarried'];
        $single = EDIConstants::MARITAL_STATUS['Single'];

        //Try looping to add
        $count = 0;
        foreach($married as $key => $value) {
            $this->logInfo("Key: ". $key . " Value: " . $value);
            $builder->add('stipulation_'.$count, ChoiceType::class, [
                'choices' => [$key => $value],
                'choice_value' =>
                    'stipulation',
//                'choice_label' => "test",
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
            ]);
            $count++;
        }
        foreach($unmarried as $key => $value) {
            $this->logInfo("Key: ". $key . " Value: " . $value);
            $builder->add('stipulation_'.$count, ChoiceType::class, [
                'choices' => [$key => $value],
                'choice_value' =>
                    'stipulation',
//                'choice_label' => "test",
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
            ]);
            $count++;
        }
        foreach($single as $key => $value) {
            $this->logInfo("Key: ". $key . " Value: " . $value);
            $builder->add('stipulation_'.$count, ChoiceType::class, [
                'choices' => [$key => $value],
                'choice_value' =>
                    'stipulation',
//                'choice_label' => "test",
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
            ]);
            $count++;
        }
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


}