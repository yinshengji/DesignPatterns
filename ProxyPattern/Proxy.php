<?php
/**
 * Created by PhpStorm.
 * User: shengji1
 * Date: 2019-05-12
 * Time: 17:27
 */

namespace ProxyPattern;


class Proxy implements IGiveGift
{
    private $pursuer;
    public function __construct(SchoolGirl $gg)
    {
        $this->pursuer = new Pursuer($gg);
    }

    public function GiveDolls()
    {
        $this->pursuer->giveDolls();
    }

    public function GiveFlowers()
    {
        $this->pursuer->giveFlowers();
    }

}