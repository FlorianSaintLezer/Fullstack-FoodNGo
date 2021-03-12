<?php

namespace ContainerULGMgv3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PyIw17TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PyIw17T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PyIw17T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\RecipesRepository', 'getRecipesRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\RecipesRepository',
        ]);
    }
}
