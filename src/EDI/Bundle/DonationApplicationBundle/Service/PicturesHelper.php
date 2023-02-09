<?php

namespace EDI\Bundle\DonationApplicationBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationLocationStipulationType;
use Michelf\MarkdownInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Security\Core\Security;
use function PHPUnit\Framework\isNull;

class PicturesHelper
{
    private LoggerInterface $markdownLogger;

    public function __construct(LoggerInterface $markdownLogger)
    {
        $this->markdownLogger = $markdownLogger;
    }

    public function createPictures(EmbApplication $embApplication): ArrayCollection
    {
        $pictures = new ArrayCollection();
        $emb_pictures_array = $embApplication->getPictures()->toArray();
        foreach($emb_pictures_array as $picture) {
            $pictures->add($picture);
        }
        //Try looping to add
        $count = 0;
        $new_picture_limit = (!is_null($emb_pictures_array) ? EDIConstants::NUMBER_OF_PICTURES_DEFAULT - sizeof($emb_pictures_array) : EDIConstants::NUMBER_OF_PICTURES_DEFAULT);
        $new_picture_limit = 1; //hardcoding to test this
        while ($count < $new_picture_limit) {
            $emb_picture = new EmbPicture();
            $emb_picture->setId($embApplication->getId());
            $pictures->add($emb_picture);
            $count++;
        }
        return $pictures;
    }

}
