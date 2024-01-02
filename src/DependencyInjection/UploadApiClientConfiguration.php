<?php declare( strict_types = 1 );

namespace Siestacat\UploadApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class UploadApiClientConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder():TreeBuilder
    {
        $treeBuilder = new TreeBuilder('upload_api_client');

        $treeBuilder
            ->getRootNode()
                ->children()
                    ->scalarNode('base_url')->defaultValue('%env(str:UPLOAD_API_CLIENT_BASE_URL)%')->end()
                    ->scalarNode('authorization_token')->defaultValue('%env(str:UPLOAD_API_CLIENT_AUTH_TOKEN)%')->end()
                    ->booleanNode('ssl_verify')->defaultValue('%env(bool:UPLOAD_API_CLIENT_SSL_VERIFY)%')->end()
                ->end()
        ;

        return $treeBuilder;
    }
}