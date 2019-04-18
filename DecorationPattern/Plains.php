<?php
namespace DecorationPattern;
/**
 * 平原具体类
 * User: shengji1
 * Date: 2019-04-18
 * Time: 00:16
 */

class Plains extends Tile
{
    private $wealthFactor = 2;
    function getWealthFactor()
    {
        return $this->wealthFactor;
    }
}