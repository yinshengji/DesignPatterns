<?php

namespace DependencyInjection;

class Container
{
    //当前容器对象
    private static $instance;
    //存放在容器里的实例
    protected $instances = [];
    private function __construct()
    {
    }

    /**
     * @return $this Container
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }
    public function get($key)
    {
        if (isset($this->instances[$key])) {
            return $this->instances[$key];
        }
        return $this->make($key);
    }

    public function bind($key, $concrete = null)
    {
        if ($concrete instanceof \Closure) {
            $this->instances[$key] = $concrete;
        } else if (is_object($concrete)) {
            $this->instances[$key] = $concrete;
        } else {
            $this->make($key, $concrete);
        }

        return $this;
    }

    public function make($abstract, $args = null)
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        $object = $this->invokeClass($abstract);
        $this->instances[$abstract] = $object;
        return $object;
    }

    public function parseParams(\ReflectionMethod $reflect)
    {
        $args = [];
        $params = $reflect->getParameters();
        if (!$params) {
            return $args;
        }

        if (count($params) > 0) {
            foreach ($params as $param) {
                //参数是类的情况
                $class = $param->getType();
                if ($class) {
                    $args[] = $this->make($class->getName());
                    continue;
                }
                //参数是常规参数
                $name = $param->getName();
                //默认值是null
                $def = null;
                if ($param->isOptional()) {
                    $def = $param->getDefaultValue();
                }
                $args[] = $_REQUEST[$name] ?? $def;
            }
        }

        return $args;
    }

    public function invokeClass($abstract)
    {
        $reflectionClass = new \ReflectionClass($abstract);
        $construct = $reflectionClass->getConstructor();
        $params = $construct ? $this->parseParams($construct) : [];
        $object = $reflectionClass->newInstanceArgs($params);
        return $object;
    }
}