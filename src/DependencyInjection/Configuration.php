<?php

namespace Greendot\ImagePusherServer\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('image_puller_client');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('jwt_user')->defaultValue('')->end()
                ->scalarNode('jwt_pass')->defaultValue('')->end()
            ->end();
        return $treeBuilder;
    }
}