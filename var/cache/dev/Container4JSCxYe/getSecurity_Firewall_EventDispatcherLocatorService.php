<?php

namespace Container4JSCxYe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_EventDispatcherLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.event_dispatcher_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.event_dispatcher_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'debug.security.event_dispatcher.main', class: 'Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher')] fn () => ($container->privates['debug.security.event_dispatcher.main'] ?? self::getDebug_Security_EventDispatcher_MainService($container))]);
    }
}
