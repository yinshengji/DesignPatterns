<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-15
 * Time: 22:57
 */
namespace StrategyPattern;

class ConcreteStrategyA extends Strategy
{
    public function algorithm()
    {
        var_dump('正常收费');
    }
}