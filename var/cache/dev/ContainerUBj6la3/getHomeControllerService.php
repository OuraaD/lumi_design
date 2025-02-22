<?php

namespace ContainerUBj6la3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Front\HomeController' shared autowired service.
     *
     * @return \App\Controller\Front\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Front/HomeController.php';

        $container->services['App\\Controller\\Front\\HomeController'] = $instance = new \App\Controller\Front\HomeController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Front\\HomeController', $container));

        return $instance;
    }
}
