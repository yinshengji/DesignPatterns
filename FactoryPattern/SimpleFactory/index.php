<?php
/**
 * 工厂类
 * User: shengji1
 * Date: 2019-04-14
 * Time: 23:09
 */
namespace FactoryPattern\SimpleFactory;

include_once "../../AutoLoad.php";

$factory = new SendFactory();
try {
    $factory->make(SendFactory::SMS)->send();
    $factory->make(SendFactory::MAIL)->send();
    //$factory->make('phone')->send();
} catch (\Exception $exception) {
    echo $exception->getMessage();
}

StaticSendFactory::produceMail()->send();
StaticSendFactory::produceSms()->send();