<?php

namespace MyProject;

// 常量 __NAMESPACE__ 在动态创建名称时很有用
/**
 * Example #3 使用 __NAMESPACE__ 动态创建名称
 */
function get($classname){
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a();
}

get('MyClass');

class MyClass {
    function __construct(){
        echo __METHOD__, "<br/>";
    }
}

?>