<?php declare( strict_types = 1 );

namespace Siestacat\UploadApiClientBundle;

use Siestacat\UploadApiClientBundle\DependencyInjection\UploadApiClientExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class UploadApiClientBundle extends AbstractBundle
{
    public function getContainerExtension():ExtensionInterface
    {
        $this->extension = $this->extension === null ? new UploadApiClientExtension : $this->extension;

        return $this->extension;
    }
}