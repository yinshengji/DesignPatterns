<?php
/**
 * Created by PhpStorm.
 * User: mioji
 * Date: 2018/1/27
 * Time: 下午11:48
 */
define('PROJECT_DIR', __DIR__ . '/');

function autoload($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);
    $file_name = $class_name . '.php';
    include_once PROJECT_DIR . $file_name;
}

spl_autoload_register('autoload');