<?php
namespace DecorationPattern;
/**
 * 装饰器类
 * User: shengji1
 * Date: 2019-04-18
 * Time: 00:17
 */

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}