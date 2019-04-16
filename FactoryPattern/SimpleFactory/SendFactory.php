<?php
namespace FactoryPattern\SimpleFactory;

use FactoryPattern\MailSender;
use FactoryPattern\SmsSender;

class SendFactory
{
    const MAIL = 'mail';
    const SMS = 'sms';

    /**
     * @param $type
     * @return MailSender|SmsSender
     * @throws \Exception
     */
    public function make($type)
    {
        switch ($type) {
            case self::MAIL:
                return new MailSender();
                break;
            case self::SMS:
                return new SmsSender();
                break;
            default:
                throw new \Exception('nonsupport type!');
        }
    }
}