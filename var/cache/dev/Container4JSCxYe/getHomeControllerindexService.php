<?php

namespace Container4JSCxYe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mQ2gXFd.App\Controller\Front\HomeController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mQ2gXFd.App\\Controller\\Front\\HomeController::index()'] = ($container->privates['.service_locator.mQ2gXFd'] ?? $container->load('get_ServiceLocator_MQ2gXFdService'))->withContext('App\\Controller\\Front\\HomeController::index()', $container);
    }
}
