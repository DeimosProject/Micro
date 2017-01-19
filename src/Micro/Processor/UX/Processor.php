<?php

namespace Deimos\Micro\Processor\UX;

use Deimos\Micro\Processor\UX\Controller\View;

class Processor extends \Deimos\Controller\Processor
{

    /**
     * @return View
     *
     * @throws \InvalidArgumentException
     */
    protected function buildView()
    {
        return new View($this->builder);
    }

}