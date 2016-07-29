<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 29/07/16
 * Time: 10:29
 */

namespace DesignPatterns\Router;


use DesignPatterns\Container\Container;
use Interop\Container\ContainerInterface;

class Router
{
    private $config = [];
    private $container;
    /**
     * Routeur constructor.
     * @param array $config
     */
    public function __construct(array $config, ContainerInterface $container)
    {
        $this->config = $config;
        $this->container = $container;
    }

    public function route($service)
    {
        $maRoute = $_GET['route'];
        if(!isset($this->config[$maRoute])){
            header("HTTP/1.0 404 Not Found");
        }
        else{
           $controller = $this->container->get($this->config[$maRoute]);
           echo $controller->indexAction();
        }
    }


}