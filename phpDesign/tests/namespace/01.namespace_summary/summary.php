<?php

/**
 * Example #1 命名空间语法示例
 */

/*
 * 命名空间名称定义
 *
 * 1.非限定名称 (Unqualified name)：
 * 名称中不包含命名空间分隔符的标识符，例如 Foo
 *
 * 2.限定名称 (Qualified name)：
 * 名称中含有命名空间分隔符的标识符，例如 Foo\Bar
 *
 * 3.完全限定名称(Fully qualified name)：
 * 名称中以命名空间分隔符开始的标识符，例如 \Foo\Bar
 * 关键字 namespace 开头也是一个完全限定名称，例如   namespace\Foo 
 */

namespace my\name; // 命名空间定义

class MyClass {
    function __construct(){
        return __METHOD__;
    }
}
function myfunction(){
    return __FUNCTION__;
}
const MYCONST = 'namespaced';

/**
 * *************************************************************************
 */

// 当前空间
$a = new MyClass();
var_dump($a);
echo '<br>';

// 全局空间
$b = new \my\name\MyClass();
var_dump($b);
echo '<br>';

// 使用命名空间：后备全局函数/常量
$a = new \stdClass();
var_dump($a);
echo '<br>';

// namespace 操作符
$c = namespace\MYCONST;
var_dump($c);
echo '<br>';

// 命名空间和动态语言特征
$d = constant(__NAMESPACE__ . '\MYCONST');
var_dump($d);

?>