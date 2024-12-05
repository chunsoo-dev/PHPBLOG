<?php

namespace App\Controllers;


class indexController
{
    public static function index()
    {

        include dirname(__DIR__, 2) . '/resources/index.php';

    }
}