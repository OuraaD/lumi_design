<?php

namespace ContainerUBj6la3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAdminTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CreateAdminType' shared autowired service.
     *
     * @return \App\Form\CreateAdminType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CreateAdminType.php';

        return $container->privates['App\\Form\\CreateAdminType'] = new \App\Form\CreateAdminType();
    }
}
