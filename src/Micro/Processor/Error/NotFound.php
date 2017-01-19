<?php

namespace Deimos\Micro\Processor\Error;

use Deimos\Micro\Controller;

class NotFound extends Controller
{

    protected $attribute = 'notFound';

    protected function actionDefault()
    {
        return '<h1>Page not found</h1>';
    }

}