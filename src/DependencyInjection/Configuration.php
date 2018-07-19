<?php

namespace CleverCoders\Bundle\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder  = new TreeBuilder();
        $rootNode = $builder->root('clever_coders_blog');

        $rootNode
            ->fixXmlConfig('content_type')
            ->children()
                ->arrayNode('content_types')
                    ->useAttributeAsKey('type')
                    ->scalarPrototype()
                ->end()
            ->end();

        return $builder;
    }
}
