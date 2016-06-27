<?php

namespace IMooc;

class Object {
    protected $array = array();
    
    // 魔术方法
    function __set($key, $value){
        dump(__METHOD__);
        $this->array[$key] = $value;
    }
    
    function __get($key){
        dump(__METHOD__);
        return $this->array[$key];
    }
    
    function __call($func, $param){
        dump($func);
        dump($param);
        return "magic function\n";
    }
    
    static function __callStatic($func, $param){
        dump($func);
        dump($param);
        return "magic static function\n";
    }
    
    function __toString(){
        return 'print class ' . __CLASS__ . ' as a string';
    }
    
    function __invoke($param){
        dump($param);
        return "invoke";
    }
    
    static function test(){
        echo 'hello world!';
    }
}
