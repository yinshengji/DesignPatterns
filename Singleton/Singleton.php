<?php

namespace Singleton;
/**
 * @Description: 单例模式实现
 *
 * @Author: yinshengji
 * @CreateTime: 2018/4/24 下午7:29
 */
class Singleton
{
    //缓存唯一实例
    private static $instance = null;

    /**
     * 将构造方式设置为私有，遍不可以从外部进行实例
     * Singleton constructor.
     */
    private function __construct()
    {
        //TODO
    }

    /**
     * 提供唯一获得实例方式
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        return new Singleton();
    }

    /**
     * 避免通过克隆方式获得对象实例
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /*
    private function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
    */
}
