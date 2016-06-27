<?php

// 在一个命名空间中，当 PHP 遇到一个非限定的类时，类名称总是解析到当前命名空间中的名称
// 因此在访问系统内部或不包含在命名空间中的类名称时，必须使用完全限定名称

/**
 * Example #1 在命名空间中访问全局类
 */

namespace A\B\C;

class Exception extends \Exception {
}

$a = new Exception('hi'); // $a 是类 A\B\C\Exception 的一个对象
$b = new \Exception('hi'); // $b 是类 Exception 的一个对象

// $c = new ArrayObject(); // 致命错误, 找不到 A\B\C\ArrayObject 类

?>