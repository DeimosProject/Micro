<?php

namespace Deimos\Micro\Processor\UX\Controller;

use Deimos\Micro\Controller;

class View extends Controller
{

    protected function actionDefault()
    {
        return '<h1>' . __METHOD__ . '</h1>';
    }

    protected function actionTest()
    {
        return '<h1>' . __METHOD__ . '</h1>';
    }

}