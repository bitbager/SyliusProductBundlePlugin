<?php

/*
 * This file has been created by developers from BitBag. 
 * Feel free to contact us once you face any issues or want to start
 * another great project. 
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl. 
 */

declare(strict_types=1);

namespace BitBag\SyliusProductBundlePlugin\Form\Type;

use Sylius\Bundle\ProductBundle\Form\Type\ProductAutocompleteChoiceType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductBundleType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'sylius.ui.code',
            ])
            ->add('name', TextType::class, [
                'label' => 'sylius.ui.name',
            ])
            ->add('products', ProductAutocompleteChoiceType::class, [
                'label' => 'sylius.ui.products',
                'multiple' => true,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_product_bundle_plugin_block';
    }
}
