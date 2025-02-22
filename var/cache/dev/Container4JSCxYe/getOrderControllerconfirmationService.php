<?php

namespace Container4JSCxYe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderControllerconfirmationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uPDR.Ix.App\Controller\Front\OrderController::confirmation()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uPDR.Ix.App\\Controller\\Front\\OrderController::confirmation()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\OrderRepository',
        ]))->withContext('App\\Controller\\Front\\OrderController::confirmation()', $container);
    }
}
