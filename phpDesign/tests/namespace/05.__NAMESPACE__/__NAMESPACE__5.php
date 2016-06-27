<?php

namespace MyProject;

// 关键字 namespace 可用来显式访问当前命名空间或子命名空间中的元素。它等价于类中的 self 操作符。

/**
 * Example #5 namespace 操作符, 全局代码
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