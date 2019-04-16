<?php
namespace FactoryPattern\AbstractFactory;
require "../../AutoLoad.php";

use FactoryPattern\AbstractFactory\SendSmsFactory;
use FactoryPattern\AbstractFactory\SendMailFactory;

$provider = new SendMailFactory();
$provider->produce()->send();

$provider = new SendSmsFactory();
$provider->produce()->send();