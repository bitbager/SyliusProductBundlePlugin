<?php

declare(strict_types=1);

namespace BitBag\SyliusProductBundlePlugin\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

final class BitBagSyliusProductBundleExtension extends Extension
{
    public function load(array $config, ContainerBuilder $container): void
    {
    }
}
