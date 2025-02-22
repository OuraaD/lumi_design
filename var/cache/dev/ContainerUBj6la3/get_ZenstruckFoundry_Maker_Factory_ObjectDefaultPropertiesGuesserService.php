<?php

namespace ContainerUBj6la3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_Factory_ObjectDefaultPropertiesGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.factory.object_default_properties_guesser' shared service.
     *
     * @return \Zenstruck\Foundry\Maker\Factory\ObjectDefaultPropertiesGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Maker/Factory/DefaultPropertiesGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Maker/Factory/AbstractDefaultPropertyGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Maker/Factory/ObjectDefaultPropertiesGuesser.php';

        $a = ($container->privates['.zenstruck_foundry.maker.factory.generator'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_GeneratorService'));

        if (isset($container->privates['.zenstruck_foundry.maker.factory.object_default_properties_guesser'])) {
            return $container->privates['.zenstruck_foundry.maker.factory.object_default_properties_guesser'];
        }

        return $container->privates['.zenstruck_foundry.maker.factory.object_default_properties_guesser'] = new \Zenstruck\Foundry\Maker\Factory\ObjectDefaultPropertiesGuesser(($container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService')), $a);
    }
}
