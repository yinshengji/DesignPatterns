<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-12
 * Time: 17:04
 */

require_once "../../AutoLoad.php";
use \ProxyPattern\SchoolGirl;
use \ProxyPattern\Normal\Pursuer;

$jiaojiao = new SchoolGirl("jiaojiao");
$ergou = new Pursuer($jiaojiao);
$ergou->giveDolls();
$ergou->giveFlowers();