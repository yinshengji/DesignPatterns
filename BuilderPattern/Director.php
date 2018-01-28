<?php
/**
 * Created by PhpStorm.
 * User: yinshengji
 * Date: 2018/1/27
 * Time: 下午10:43
 */

namespace BuilderPattern;

class Director
{
    /**
     * 自动建造车辆
     * @param BuilderInterface $builder
     * @return mixed
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->addDoor();
        $builder->addEngine();

        return $builder->getVehicle();
    }
}