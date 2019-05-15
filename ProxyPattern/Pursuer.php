<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-12
 * Time: 17:00
 */
namespace ProxyPattern;

class Pursuer implements IGiveGift
{
    private $girl;

    public function __construct(\ProxyPattern\SchoolGirl $schoolGirl)
    {
        $this->girl = $schoolGirl;
    }

    public function giveDolls()
    {
        var_dump($this->girl->getName() . ' 送给你个洋娃娃');
    }

    public function giveFlowers()
    {
        var_dump($this->girl->getName() . ' 送给你朵花');
    }
}