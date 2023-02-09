<?php

namespace EDI\Bundle\DonationApplicationBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationLocationStipulationType;
use Michelf\MarkdownInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Security\Core\Security;

class StipulationsGroupsHelper
{
    private LoggerInterface $markdownLogger;

    public function __construct(LoggerInterface $markdownLogger)
    {
        $this->markdownLogger = $markdownLogger;
    }

    public function createMarriageStipuations(EmbApplication $embApplication):ArrayCollection
    {
        $marriage_stipulations = new ArrayCollection();
        $married = EDIConstants::MARITAL_STATUS['Married'];
        $unmarried = EDIConstants::MARITAL_STATUS['Unmarried'];
        $single = EDIConstants::MARITAL_STATUS['Single'];
        $groups = [$married, $unmarried, $single];
        //Try looping to add
        $count = 0;
        foreach ($groups as $status_group)
        {
            foreach ($status_group as $key => $value) {
                $marriage_stipulations->add($this->stipulationCompare($value, EDIConstants::STIPULATION_TYPE_MARITAL_STATUS, $embApplication));
            }
        }
        return $marriage_stipulations;
    }

    public function createReligionStipuations(EmbApplication $embApplication):ArrayCollection
    {
        $religion_stipulations = new ArrayCollection();
        $religions = EDIConstants::RELIGIONS;
        //Try looping to add
        $count = 0;
        foreach ($religions as $key => $value)
        {
            $religion_stipulations->add($this->stipulationCompare($value, EDIConstants::STIPULATION_TYPE_RELIGION, $embApplication));

        }
        return $religion_stipulations;
    }

    public function createRaceStipuations(EmbApplication $embApplication):ArrayCollection
    {
        $race_stipulations = new ArrayCollection();
        $races = EDIConstants::RACES;
        //Try looping to add
        $count = 0;
        foreach ($races as $key => $value)
        {
            $race_stipulations->add($this->stipulationCompare($value, EDIConstants::STIPULATION_TYPE_RACE, $embApplication));
        }
        return $race_stipulations;
    }

    private function stipulationCompare($stipulation_text, $stipulation_type, EmbApplication $embApplication):EmbStipulation
    {
        $stipulations = $embApplication->getStipulations();
        $stipulation_exists = false;
        $passed_stipulation = null;
        foreach ($stipulations as $current_stipulation) {
            if ($current_stipulation->getStipulation() === $stipulation_text) {
                $passed_stipulation = $current_stipulation;
                $stipulation_exists = true;
            }
        }
        if(!$stipulation_exists) {
            $stipulation = new EmbStipulation();
            $stipulation->setStipulation($stipulation_text);
            $stipulation->setStipulationType($stipulation_type);
        } else {
            $stipulation = $passed_stipulation;
        }
        return $stipulation;
    }
    /** var EmbApplication $emb_application */
    public function setLocationandEducationStipulations($emb_application): EmbApplication {
        $stipulations = $emb_application->getStipulations();
        foreach ($stipulations as $current_stipulation) {
            if ($current_stipulation->getStipulationType() === EDIConstants::STIPULATION_TYPE_LOCATION) {
                $emb_application->setLocationStipulation($current_stipulation);
            }
            if ($current_stipulation->getStipulationType() === EDIConstants::STIPULATION_TYPE_EDUCATION) {
                $emb_application->setEducationStipulation($current_stipulation);
            }
        }
        return $emb_application;
    }
}