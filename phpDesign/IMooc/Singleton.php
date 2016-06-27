<?php

namespace IMooc;

/**
 * 单例模式（三私两静一公）
 */
class Singleton {
    // 私有化构造方法，禁止外部实例化对象
    private function __construct(){
    }
    // 私有化__clone，防止对象被克隆
    private function __clone(){
    }
    // 私有化内部实例对象
    private static $db = null;
    // 公有静态实例方法
    public static function getInstance(){
        if (empty(self::$db)) {
            self::$db = new self();
            return self::$db;
        } else {
            return self::$db;
        }
    }
    
    // 链式操作
    function where($where){
        return $this;
    }
    
    function order($order){
        return $this;
    }
    
    function limit($limit){
        return $this;
    }
    
    function query($sql){
        echo "SQL: $sql\n";
    }
}