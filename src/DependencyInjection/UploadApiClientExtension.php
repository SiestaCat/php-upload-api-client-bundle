<?php declare( strict_types = 1 );

namespace Siestacat\UploadApiClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Yaml\Parser as YamlParser;

class UploadApiClientExtension extends Extension
{

    const CONFIG_DIR = __DIR__ . '/../../config';

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(self::CONFIG_DIR));
        $loader->load('services.yaml');

        $config = $this->processConfiguration(new UploadApiClientConfiguration, $configs);

        $container->setParameter('upload_api_client.base_url', $config['base_url']);
        $container->setParameter('upload_api_client.authorization_token', $config['authorization_token']);
        $container->setParameter('upload_api_client.ssl_verify', $config['ssl_verify']);

    }

    public function getAlias():string
    {
        return 'upload_api_client';
    }
}