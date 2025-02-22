<?php

namespace ContainerUBj6la3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_NamespaceGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.namespace_guesser' shared service.
     *
     * @return \Zenstruck\Foundry\Maker\NamespaceGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Maker/NamespaceGuesser.php';

        return $container->privates['.zenstruck_foundry.maker.namespace_guesser'] = new \Zenstruck\Foundry\Maker\NamespaceGuesser(($container->privates['.zenstruck_foundry.persistence_manager'] ?? $container->load('get_ZenstruckFoundry_PersistenceManagerService')));
    }
}
