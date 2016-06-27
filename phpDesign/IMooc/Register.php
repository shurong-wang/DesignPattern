<?php

namespace IMooc;

/**
 * 注册树模式
 */
class Register {
    protected static $objects;
    
    static function set($alias, $object){
        self::$objects[$alias] = $object;
    }
    
    static function get($key){
        if (! isset(self::$objects[$key])) {
            return false;
        }
        return self::$objects[$key];
    }
    
    function destroy($alias){
        unset(self::$objects[$alias]);
    }
}