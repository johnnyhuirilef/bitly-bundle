<?php

namespace Enius\BitlyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('enius_bitly');
        if (\method_exists($builder, 'getRootNode')) {
            $rootNode = $builder->getRootNode();
        } else {
            $rootNode = $builder->root('enius_bitly');
        }
        $rootNode
            ->children()
            ->scalarNode('token')->isRequired()->end()
            ->end();

        return $builder;
    }
}