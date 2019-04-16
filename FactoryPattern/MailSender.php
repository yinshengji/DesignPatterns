<?php
namespace FactoryPattern;

class MailSender implements Sender
{
    public function send()
    {
        var_dump('send mail');
    }
}