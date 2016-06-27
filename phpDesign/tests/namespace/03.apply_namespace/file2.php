<?php

namespace Foo\Bar;

include 'file1.php';

const FOO = 2;

function foo(){
    echo __FUNCTION__, "<br/>";
}

class foo {
    function __construct(){
        echo __METHOD__, "<br/>";
        self::staticmethod();
    }
    
    static function staticmethod(){
        echo __METHOD__, "<br/>";
    }
}

/* 非限定名称 */
foo(); // 解析为 Foo\Bar\foo
foo::staticmethod(); // 解析为类 Foo\Bar\foo 的静态方法 staticmethod
echo FOO, "<hr/>"; // 解析为常量 Foo\Bar\FOO

/* 限定名称 */
subnamespace\foo(); // 解析为函数 Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // 解析为类 Foo\Bar\subnamespace\foo 的静态方法 staticmethod
echo subnamespace\FOO, "<hr/>"; // 解析为常量 Foo\Bar\subnamespace\FOO

/* 完全限定名称 */
\Foo\Bar\foo(); // 解析为函数 Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // 解析为类 Foo\Bar\foo 的静态方法 staticmethod
echo \Foo\Bar\FOO, "<hr/>"; // 解析为常量 Foo\Bar\FOO

?>