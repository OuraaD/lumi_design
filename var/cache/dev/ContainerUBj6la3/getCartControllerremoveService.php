<?php

namespace ContainerUBj6la3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerremoveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KQF_kLz.App\Controller\Front\CartController::remove()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KQF_kLz.App\\Controller\\Front\\CartController::remove()'] = ($container->privates['.service_locator.KQF_kLz'] ?? $container->load('get_ServiceLocator_KQFKLzService'))->withContext('App\\Controller\\Front\\CartController::remove()', $container);
    }
}
