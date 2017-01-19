<?php

namespace Deimos\Micro\Processor;

class Processor extends \Deimos\Controller\Processor
{

    protected $attribute = 'runner';

    /**
     * @return CP\Processor
     *
     * @throws \InvalidArgumentException
     */
    protected function buildCp()
    {
        return new CP\Processor($this->builder);
    }

    /**
     * @return UX\Processor
     *
     * @throws \InvalidArgumentException
     */
    protected function buildUx()
    {
        return new UX\Processor($this->builder);
    }

}