<?php
namespace FactoryPattern\SimpleFactory;

class SmsSender implements Sender
{
    public function send()
    {
        var_dump('send sms');
    }
}