<?php
namespace IMooc;

/**
 * 使用 ArrayAccess 实现配置文件的自动加载
 */
class Config implements \ArrayAccess {
    protected $path;
    protected $configs = array();

    function __construct($path){
        if (0 === stripos($path, BASEDIR)) {
            $this->path = $path;
        } else {
            $this->path = BASEDIR . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
        }
    }

    function offsetGet($key){
        if (empty($this->configs[$key])) {
            $file_path = $this->path . DIRECTORY_SEPARATOR . $key . '.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    function offsetSet($key, $value){
        throw new \Exception("cannot write config file.");
    }

    function offsetExists($key){
        return isset($this->configs[$key]);
    }

    function offsetUnset($key){
        unset($this->configs[$key]);
    }
}