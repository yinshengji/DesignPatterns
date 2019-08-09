<?php
/**
 * 外观类
 * User: shengji1
 * Date: 2019-08-09
 * Time: 19:29
 */
namespace FacadePattern;

class Fund
{
    private $stockOne;
    public function __construct()
    {
        $this->stockOne = new stockOne();
        $this->stockTwo = new stockTwo();
    }

    public function BuyFund()
    {
        $this->stockOne->buy();
        $this->stockTwo->buy();
        //...复杂操作
    }

    public function SellFund()
    {
        $this->stockOne->sell();
        //...复杂操作
        $this->stockTwo->sell();
    }
}