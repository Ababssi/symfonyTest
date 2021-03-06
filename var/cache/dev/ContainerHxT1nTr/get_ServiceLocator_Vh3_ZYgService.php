<?php

namespace ContainerHxT1nTr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vh3_ZYgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vh3.zYg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vh3.zYg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cityRepo' => ['privates', 'App\\Repository\\CityRepository', 'getCityRepositoryService', true],
        ], [
            'cityRepo' => 'App\\Repository\\CityRepository',
        ]);
    }
}
