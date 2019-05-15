<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-15
 * Time: 22:57
 */
namespace StrategyPattern;

class ConcreteStrategyC extends Strategy
{
    public function algorithm()
    {
        var_dump('打8折');
    }
}