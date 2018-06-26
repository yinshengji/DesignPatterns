<?php
/**
 * @Description: 单例模式测试
 *
 * @Author: yinshengji
 * @CreateTime: 2018/4/25 上午10:01
 */
include_once "../AutoLoad.php";

var_dump(Singleton\Singleton::getInstance());
var_dump(Singleton\Singleton::getInstance());
$singleton = \Singleton\Singleton::getInstance();
//禁止clone，序列化
//$a = clone $singleton;
//var_dump(unserialize(serialize(\Singleton\Singleton::getInstance())));