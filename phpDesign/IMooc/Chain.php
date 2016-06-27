<?php

namespace IMooc;

class Chain {
    private function __construct(){
    }
    private function __clone(){
    }
    private static $db = null;
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