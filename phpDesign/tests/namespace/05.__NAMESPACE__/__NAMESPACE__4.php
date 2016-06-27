<?php

namespace MyProject;

function func(){
    echo __FUNCTION__, "<br/>";
}
class cname {
    static function method(){
        echo __METHOD__, "<br/>";
    }
}
const CONSTANT = "namespaced";

// 关键字 namespace 可用来显式访问当前命名空间或子命名空间中的元素。它等价于类中的 self 操作符。

/**
 * Example #4 namespace 操作符，命名空间中的代码
 */
namespace\func(); // calls function MyProject\func()
namespace\cname::method(); // calls static method "method" of class MyProject\cname
$b = namespace\CONSTANT; // assigns value of constant MyProject\CONSTANT to $b
echo $b;
?>