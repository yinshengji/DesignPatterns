<?php
namespace FactoryPattern\SimpleFactory;

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