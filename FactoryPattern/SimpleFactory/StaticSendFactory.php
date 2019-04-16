<?php
namespace FactoryPattern\SimpleFactory;
use FactoryPattern\MailSender;
use FactoryPattern\SmsSender;

class StaticSendFactory
{
    public static function produceMail()
    {
        return new MailSender();
    }

    public static function produceSms()
    {
        return new SmsSender();
    }
}