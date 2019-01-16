<?php

namespace Enius\BitlyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('enius_bitly');
        $rootNode
            ->children()
            ->scalarNode('token')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}