<?php

namespace BuilderPattern;

/**
 * Created by PhpStorm.
 * User: yinshengji
 * Date: 2018/1/27
 * Time: 下午10:35
 */
interface BuilderInterface
{
    /**
     * 创造车辆
     * @return mixed
     */
    public function createVehicle();

    /**
     * 增加轮子
     * @return mixed
     */
    public function addWheel();

    /**
     * 增加引擎
     * @return mixed
     */
    public function addEngine();

    /**
     * 增加车门
     * @return mixed
     */
    public function addDoor();

    /**
     * 获取车辆
     * @return mixed
     */
    public function getVehicle();
}
