<?php

namespace IMooc;

/*
 * 测试 自动加载
 */
class Autoload {
    public function __construct(){
        echo __CLASS__, '<hr/>';
    }
    
    public function method(){
        echo '实例方法：', __METHOD__, "<br/>";
    }
    
    static public function staticMethod(){
        echo '静态方法：', __METHOD__, "<br/>";
    }
}
