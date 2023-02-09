<?php
namespace EDI\Bridge\DonationApplicationFrontendBundle;

use Oro\Bundle\GaufretteBundle\Command\MigrateFileStorageCommand;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use EDI\Bridge\DonationApplicationFrontendBundle\DependencyInjection\Factory\ConfigurationFactory;
use Oro\Bundle\GaufretteBundle\DependencyInjection\OroGaufretteExtension;
class DonationApplicationFrontendBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        /** @var OroGaufretteExtension $gaufretteExtension */
        $gaufretteExtension = $container->getExtension('oro_gaufrette');
        $gaufretteExtension->addConfigurationFactory(new ConfigurationFactory());
    }
}