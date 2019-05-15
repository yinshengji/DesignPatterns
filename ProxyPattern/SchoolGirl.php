<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-12
 * Time: 16:57
 */
namespace ProxyPattern;

class SchoolGirl
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}