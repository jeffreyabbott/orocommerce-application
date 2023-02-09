<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle\DependencyInjection\Factory;

use Oro\Bundle\GaufretteBundle\DependencyInjection\Factory\ConfigurationFactoryInterface;

class ConfigurationFactory implements ConfigurationFactoryInterface
{
    public function getAdapterConfiguration(string $configString): array
    {
        return array();
    }

    public function getKey(): string
    {
        return "config key";
    }

    public function getHint(): string
    {
        return "config hint";
    }
}