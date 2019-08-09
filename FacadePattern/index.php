<?php
/**
 * 外观模式使用类
 * User: shengji1
 * Date: 2019-08-09
 * Time: 20:56
 */
namespace FacadePattern;
require_once "../AutoLoad.php";

$fund = new \FacadePattern\Fund();
$fund->BuyFund();
echo '3天后' . PHP_EOL;
$fund->SellFund();