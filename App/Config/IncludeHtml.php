<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 29/08/2017
 * Time: 09:32
 */

namespace App\Config;


class IncludeHtml
{
    private static $directory;

    private function __construct()
    {
        self::$directory = DIR . DS . 'App' . DS . 'View' . DS . 'includes' . DS;
    }

    public static function includePartHtml($file)
    {
        new IncludeHtml();
        include self::$directory . $file . '.php';
    }
}