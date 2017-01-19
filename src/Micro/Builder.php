<?php

namespace Deimos\Micro;

use Deimos\Config\Config;
use Deimos\Helper\Helper;
use Deimos\Request\Request;
use Deimos\Router\Router;

/**
 * Class Builder
 *
 * @package Deimos\Micro
 *
 * @method
 */
class Builder extends \Deimos\Builder\Builder
{

    /**
     * @var string
     */
    protected $rootDir;

    /**
     * Builder constructor.
     *
     * @param $rootDir
     */
    public function __construct($rootDir)
    {
        $this->rootDir = $rootDir;
    }

    /**
     * @return Helper
     *
     * @throws \InvalidArgumentException
     */
    public function helper()
    {
        return $this->once(function ()
        {
            return new Helper($this);
        }, __METHOD__);
    }

    /**
     * @return Config
     */
    public function config()
    {
        return $this->once(function ()
        {
            $rootDir = $this->rootDir;

            return new Config($rootDir . 'assets/config/', $this);
        });
    }

    /**
     * @return Router
     */
    protected function router()
    {
        return $this->instance('router');
    }

    /**
     * @return Router
     *
     * @throws \InvalidArgumentException
     */
    protected function buildRouter()
    {
        $resolver = $this->config()->get('resolver')->get();

        $router = new Router();
        $router->setRoutes($resolver);

        return $router;
    }

    /**
     * @return Request
     */
    public function request()
    {
        return $this->instance('request');
    }

    /**
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    protected function buildRequest()
    {
        $request = new Request($this->helper());
        $request->setRouter($this->router());

        return $request;
    }

}