<?php

/*
 * This file has been created by developers from BitBag. 
 * Feel free to contact us once you face any issues or want to start
 * another great project. 
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl. 
 */

declare(strict_types=1);

namespace BitBag\SyliusProductBundlePlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class ProductBundleAdminMenuBuilder
{
    public function buildMenu(MenuBuilderEvent $menuBuilderEvent): void
    {
        $catalogMenuBuilder = $menuBuilderEvent->getMenu()->getChild('catalog');

        $catalogMenuBuilder
            ->addChild('bitbag_product_bundle', [
                'route' => 'bitbag_sylius_product_bundle_plugin_admin_product_bundle_index',
            ])
            ->setLabel('bitbag_sylius_product_bundle_plugin.ui.product_bundles')
            ->setLabelAttribute('icon', 'gift')
        ;
    }
}
