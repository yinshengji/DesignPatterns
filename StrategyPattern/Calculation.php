<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-15
 * Time: 23:01
 */
namespace StrategyPattern;

class Calculation
{
    public $strategy;
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function getResult()
    {
        $this->strategy->algorithm();
    }
}