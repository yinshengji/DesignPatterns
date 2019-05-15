<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-12
 * Time: 17:30
 */

require_once "../AutoLoad.php";
use \ProxyPattern\SchoolGirl;
use \ProxyPattern\Proxy;
$jiaojiao = new SchoolGirl('jiaojiao');
$proxy = new Proxy($jiaojiao);
$proxy->GiveDolls();
$proxy->GiveFlowers();