<?php
namespace FactoryPattern\AbstractFactory;

use FactoryPattern\SmsSender;
use FactoryPattern\AbstractFactory\Provider;

class SendSmsFactory implements Provider
{
    public function produce()
    {
        return new SmsSender();
    }
}