<?php

namespace EDI\Bundle\DonationApplicationBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbStipulation;
use Michelf\MarkdownInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Form;
use Symfony\Component\Security\Core\Security;

class DonationApplicationPagingButtonsHelper
{
    private LoggerInterface $markdownLogger;

    public const page_routes = array("edi_donation_application_frontend",
            "edi_donation_picture_frontend",
            "edi_donation_contact_info_frontend",
            "edi_donation_physchar_wife_frontend",
            "edi_donation_medhist_wife_frontend",
            "edi_donation_oghist_wife_frontend",
            "edi_donation_famhist_wife_frontend",
            "edi_donation_socialeduhist_wife_frontend",
            "edi_donation_physchar_husb_frontend",
            "edi_donation_medhist_husb_frontend",
            "edi_donation_famhist_husb_frontend",
            "edi_donation_socialeduhist_husb_frontend",
            "edi_donation_essay_signature_frontend");
    public function __construct(LoggerInterface $markdownLogger)
    {
        $this->markdownLogger = $markdownLogger;
    }


    public function addPagingButtons(?string $currentAction, Form $form): Form
    {
        //strip off _update or _create
        $currentAction = str_replace("_update", "", $currentAction);
        $currentAction = str_replace("_create", "", $currentAction);
        //add hidden button field clicked as work around
        $form->add('button_clicked_hidden', HiddenType::class, [
            'data' => '',
            'mapped' => false,
            'attr' => ['name' =>'button_clicked_hidden'],
        ]);
        //TODO: See notes on card
        //$cleanedCurrentAction = substr($currentAction, 0, strpos($currentAction, "_"));
//        $index = array_search($cleanedCurrentAction,$this::page_routes);
        $index = array_search($currentAction,$this::page_routes);
        $size = sizeof($this::page_routes);
        if(!is_bool($index)) {
            if($index === 0) {
                $form->add('save_button', SubmitType::class, [
                    'label' => 'Save',
                    'attr' => ['class' => 'save_button save'],
                ]);
                //Add Next button
                $form->add('next_button', SubmitType::class, [
                    'label' => 'Next',
                    'attr' => ['class' => 'next_button save'],
                ]);
            }
            elseif ($index === $size - 1) {
                $form->add('prev_button', SubmitType::class, [
                    'label' => 'Previous',
                    'attr' => ['class' => 'prev_button save'],
                ]);
                //Add Next button
                $form->add('save_button', SubmitType::class, [
                    'label' => 'Save',
                    'attr' => ['class' => 'save_button save'],
                ]);
                //Add Next button
                $form->add('submit_button', SubmitType::class, [
                    'label' => 'Submit Application',
                    'attr' => ['class' => 'submit_button save'],
                ]);
            }
            else{
                $form->add('prev_button', SubmitType::class, [
                    'label' => 'Previous',
                    'attr' => ['class' => 'prev_button save'],
                ]);
                $form->add('save_button', SubmitType::class, [
                    'label' => 'Save',
                    'attr' => ['class' => 'save_button save'],
                ]);
                //Add Next button
                $form->add('next_button', SubmitType::class, [
                    'label' => 'Next',
                    'attr' => ['class' => 'next_button save'],
                ]);
            }
        }
        return $form;
    }
    public function checkClickedPagingButtons(?String $currentAction, Form $form): string {

        $nextAction = false;
        $cleanedCurrentAction = substr($currentAction, 0, strrpos($currentAction, "_"));
        //$actionType = substr($currentAction, strpos($currentAction, "_"), strlen($currentAction));
        $index = array_search($cleanedCurrentAction,$this::page_routes);
//        $index = array_search($currentAction,$this::page_routes);
        $size = sizeof($this::page_routes);
        //Getting the hidden field because the getClickedButton issn't fucking working
        $button_clicked_hidden_data = '';
        if ($form->has('button_clicked_hidden')) {
            $button_clicked_hidden_data = $form['button_clicked_hidden']->getData();
        }
        if(!is_bool($index)) {
            if ($index === 0) {
                if('save_button' === $button_clicked_hidden_data) {
                    $nextAction = $cleanedCurrentAction;
                }
                if ('next_button' === $button_clicked_hidden_data) {
//                    $nextAction = $this::page_routes[$index + 1] . $actionType;
                    $nextAction = $this::page_routes[$index + 1];
                }

            } elseif ($index === $size - 1) {
                if ('save_button' === $button_clicked_hidden_data) {
                    $nextAction = $cleanedCurrentAction;
                }
                if ('prev_button' === $button_clicked_hidden_data) {
//                    $nextAction = $this::page_routes[$index - 1] . $actionType;
                    $nextAction = $this::page_routes[$index - 1];
                }

            } else {
                if ('save_button' === $button_clicked_hidden_data) {
                    $nextAction = $cleanedCurrentAction;
                }

                if ('prev_button' === $button_clicked_hidden_data) {
//                    $nextAction = $this::page_routes[$index - 1] . $actionType;
                    $nextAction = $this::page_routes[$index - 1];
                }

                if ('next_button' === $button_clicked_hidden_data) {
//                    $nextAction = $this::page_routes[$index + 1] . $actionType;
                    $nextAction = $this::page_routes[$index + 1];
                }
            }
        }
        return $nextAction;
    }
}