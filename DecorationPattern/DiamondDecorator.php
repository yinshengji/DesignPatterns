<?php
namespace DecorationPattern;
/**
 * 钻石平原
 * User: shengji1
 * Date: 2019-04-18
 * Time: 00:20
 */

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}