<?php
namespace Foo;

class Exception {}
function strlen($str) { return $str;}
const INI_ALL = 3;

/**
 * Example #1 在命名空间内部访问自定义类、函数和常量
 */
$a = new Exception('error'); // 实例化 Foo 命名空间下 类 Exception
$b = strlen('hi'); // 调用 Foo 命名空间下 函数 strlen
$c = INI_ALL; // 访问 Foo 命名空间下 常量 INI_ALL
var_dump($a); echo '<br/>';
var_dump($b); echo '<br/>';
var_dump($c); echo '<br/>';

echo '<hr/>';

/**
 * Example #2 在命名空间内部访问全局类、函数和常量
 */
$a = new \Exception('error'); // 实例化全局类 Exception
$b = \strlen('hi'); // 调用全局函数strlen
$c = \INI_ALL; // 访问全局常量 INI_ALL
var_dump($a); echo '<br/>';
var_dump($b); echo '<br/>';
var_dump($c); echo '<br/>';

?>