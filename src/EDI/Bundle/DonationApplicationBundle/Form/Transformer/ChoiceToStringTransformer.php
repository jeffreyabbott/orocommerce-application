<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Transformer;

use Symfony\Component\Form\Exception\TransformationFailedException;

class ChoiceToStringTransformer implements \Symfony\Component\Form\DataTransformerInterface
{


    /**
     * @inheritDoc
     */
    public function reverseTransform($array) :string
    {
        return $array[0];
    }

    /**
     * @inheritDoc
     */
    public function transform($string) :array
    {
        return array($string);
    }
}