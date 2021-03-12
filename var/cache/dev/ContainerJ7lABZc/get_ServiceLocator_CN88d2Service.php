<?php

namespace ContainerJ7lABZc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CN88d2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CN8_8d2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CN8_8d2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\CommentsRepository', 'getCommentsRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\CommentsRepository',
        ]);
    }
}
