<?php

namespace ContainerD8jVxkl;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActualiteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ActualiteType' shared autowired service.
     *
     * @return \App\Form\ActualiteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ActualiteType'] = new \App\Form\ActualiteType();
    }
}