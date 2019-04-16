<?php
namespace FactoryPattern\AbstractFactory;

use FactoryPattern\MailSender;
use FactoryPattern\AbstractFactory\Provider;

class SendMailFactory implements Provider
{

    public function produce()
    {
        return new MailSender();
    }
}