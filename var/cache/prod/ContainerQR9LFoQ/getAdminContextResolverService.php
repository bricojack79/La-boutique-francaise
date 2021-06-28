<?php

namespace ContainerQR9LFoQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminContextResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'AdminContextResolver.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
