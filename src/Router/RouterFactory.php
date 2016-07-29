<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 29/07/16
 * Time: 11:23
 */

namespace DesignPatterns\Router;


use DesignPatterns\Container\FactoryInterface;
use Interop\Container\ContainerInterface;

class RouterFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ContainerInterface $container
     * @return mixed
     */
    public function createService(ContainerInterface $container)
    {
        /*
        if(empty($container['configuration']['route'])){
            $container['configuration']['route']=[];
        }
        */
        $config = $container->get('configuration');
        if(!$config->offsetExists('routes')){
            $config->offsetSet('routes',[]);
        }
        $routeConfig = $config->offsetGet('routes')->getArrayCopy();
        return new Router($routeConfig, $container);
    }
}