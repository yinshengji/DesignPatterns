<?php
namespace FactoryPattern\SimpleFactory;

class MailSender implements Sender
{
    public function send()
    {
        var_dump('send mail');
    }
}