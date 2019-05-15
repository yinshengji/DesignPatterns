<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-15
 * Time: 23:04
 */

require_once "../AutoLoad.php";
use StrategyPattern\ConcreteStrategyA;
use StrategyPattern\ConcreteStrategyB;
use StrategyPattern\ConcreteStrategyC;
use StrategyPattern\Calculation;

$cal = new Calculation(new ConcreteStrategyA());
$cal->getResult();

$cal = new Calculation(new ConcreteStrategyB());
$cal->getResult();

$cal = new Calculation(new ConcreteStrategyC());
$cal->getResult();