<?php

namespace Container4JSCxYe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Factory\UserFactory' shared autowired service.
     *
     * @return \App\Factory\UserFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ObjectFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Persistence/PersistentObjectFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Persistence/PersistentProxyObjectFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/UserFactory.php';

        return $container->privates['App\\Factory\\UserFactory'] = new \App\Factory\UserFactory(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
