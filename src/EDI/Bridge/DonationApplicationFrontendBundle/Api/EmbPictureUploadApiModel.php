<?php

namespace EDI\Bridge\DonationApplicationFrontendBundle\Api;

use Symfony\Component\Validator\Constraints as Assert;

class EmbPictureUploadApiModel
{
    /**
     * @Assert\NotBlank()
     */
    public $filename;

    /**
     * @Assert\NotBlank()
     */
    private $data;

    private $decodeData;

    public function setData(?string $data) {
        $this->data = $data;
        $this->decodeData = base64_decode($data);
    }
    public function getDecodedData(): ?string {
        return $this->decodeData;
    }
}