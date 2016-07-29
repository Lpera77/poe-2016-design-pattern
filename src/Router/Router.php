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

    /**
     * Routeur constructor.
     * @param array $config
     */
    public function __construct(array $config, ContainerInterface $container)
    {
        $this->config = $config;
    }


}