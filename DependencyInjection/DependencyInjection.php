<?php
namespace DependencyInjection;

require_once "./Container.php";
require_once "./Test.php";
require_once "./Test1.php";

$app = Container::getInstance();
$object = $app->get(Test::class);
echo $object->getName() . PHP_EOL;