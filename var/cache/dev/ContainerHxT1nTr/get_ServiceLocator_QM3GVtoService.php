<?php

namespace ContainerHxT1nTr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QM3GVtoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qM3GVto' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qM3GVto'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cityRepo' => ['privates', 'App\\Repository\\CityRepository', 'getCityRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'residentRepo' => ['privates', 'App\\Repository\\ResidentRepository', 'getResidentRepositoryService', true],
            'ser' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'cityRepo' => 'App\\Repository\\CityRepository',
            'em' => '?',
            'residentRepo' => 'App\\Repository\\ResidentRepository',
            'ser' => '?',
        ]);
    }
}
