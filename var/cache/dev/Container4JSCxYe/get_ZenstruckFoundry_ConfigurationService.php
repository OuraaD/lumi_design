<?php

namespace Container4JSCxYe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_ConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.zenstruck_foundry.configuration' shared service.
     *
     * @return \Zenstruck\Foundry\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/FactoryRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Object/Instantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/StoryRegistry.php';

        return $container->services['.zenstruck_foundry.configuration'] = new \Zenstruck\Foundry\Configuration(new \Zenstruck\Foundry\FactoryRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\CategoryFactory'] ??= new \App\Factory\CategoryFactory());
            yield 1 => ($container->privates['App\\Factory\\OrderFactory'] ??= new \App\Factory\OrderFactory());
            yield 2 => ($container->privates['App\\Factory\\OrderItemFactory'] ??= new \App\Factory\OrderItemFactory());
            yield 3 => ($container->privates['App\\Factory\\ProductFactory'] ??= new \App\Factory\ProductFactory());
            yield 4 => ($container->privates['App\\Factory\\UserFactory'] ?? $container->load('getUserFactoryService'));
        }, 5)), \Faker\Factory::create('fr_FR'), \Zenstruck\Foundry\Object\Instantiator::withConstructor(), new \Zenstruck\Foundry\StoryRegistry(new RewindableGenerator(fn () => new \EmptyIterator(), 0), []), ($container->privates['.zenstruck_foundry.persistence_manager'] ?? $container->load('get_ZenstruckFoundry_PersistenceManagerService')));
    }
}
