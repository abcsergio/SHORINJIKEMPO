<?php

namespace ContainerD8jVxkl;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_CacheClearResultCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }
}
