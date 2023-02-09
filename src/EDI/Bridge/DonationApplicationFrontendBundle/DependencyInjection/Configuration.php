<?php

namespace EDI\Bridge\DonationApplicationFrontendBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder('donation_bridge');
        $rootNode = $treeBuilder->getRootNode();
		$rootNode
            ->children()
                ->arrayNode('donation_application_frontend')
                ->end()
                ->arrayNode('donation_picture_frontend')
                ->end()
                ->arrayNode('donation_physchar_wife_frontend')
                ->end()
                ->arrayNode('donation_physchar_husb_frontend')
                ->end()
                ->arrayNode('donation_medhist_wife_frontend')
                ->end()
                ->arrayNode('donation_medhist_husb_frontend')
                ->end()
                ->arrayNode('donation_socialeduhist_wife_frontend')
                ->end()
            ->end();

		return $treeBuilder;
	}
}
