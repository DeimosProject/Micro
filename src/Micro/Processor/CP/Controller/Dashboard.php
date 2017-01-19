<?php

namespace Deimos\Micro\Processor\CP\Controller;

use Deimos\Micro\Controller;

class Dashboard extends Controller
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