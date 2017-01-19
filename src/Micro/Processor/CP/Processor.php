<?php

namespace Deimos\Micro\Processor\CP;

use Deimos\Micro\Processor\CP\Controller\Dashboard;

class Processor extends \Deimos\Controller\Processor
{

    /**
     * @return Dashboard
     *
     * @throws \InvalidArgumentException
     */
    protected function buildDashboard()
    {
        return new Dashboard($this->builder);
    }

}