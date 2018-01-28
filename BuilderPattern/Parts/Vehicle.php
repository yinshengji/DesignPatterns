<?php
/**
 * Created by PhpStorm.
 * User: yinshengji
 * Date: 2018/1/27
 * Time: 下午11:04
 */

namespace BuilderPattern\Parts;

abstract class Vehicle
{
    protected $parts;

    public function setParts($key, $value)
    {
        $this->parts[$key] = $value;
    }

    public function getParts($key = '')
    {
        if (strlen($key) === 0) {
            return $this->parts;
        }

        return $this->parts[$key] ?? null;
    }
}