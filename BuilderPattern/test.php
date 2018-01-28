<?php

namespace BuilderPattern;
/**
 * Created by PhpStorm.
 * User: mioji
 * Date: 2018/1/27
 * Time: 下午11:31
 */
include_once "../AutoLoad.php";

$bike_builder = new BikeBuilder();
$director = new Director();
$vehicle = $director->build($bike_builder);
$vehicle->getParts('bikeNoseWheel')->info();