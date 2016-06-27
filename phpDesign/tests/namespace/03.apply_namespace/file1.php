<?php

// 命名空间的使用

namespace Foo\Bar\subnamespace;

const FOO = 1;

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


// 可以将 PHP 命名空间与文件系统作一个简单的类比
// 例如，类名可以通过三种方式引用：
/*
1. 非限定名称（不包含前缀的类名称）
例如 $a = new foo(); 或  foo::sm();
如果当前命名空间是 ns，foo 将被解析为 ns\foo
如果使用 foo 的代码是全局的，不包含在任何命名空间中的代码，则  foo 会被解析为 foo
*/


/*
2. 限定名称（包含前缀的名称）
例如 $a = new sub\foo(); 或  sub\foo::sm();
如果当前的命名空间是 ns，则  foo 会被解析为 ns\sub\foo
如果使用 foo 的代码是全局的，不包含在任何命名空间中的代码，foo 会被解析为 sub\foo
*/

/*
3. 完全限定名称（包含了全局前缀操作符的名称）
例如  $a = new \ns\foo(); 或  \ns\foo::sm();
在这种情况下，foo 总是被解析为 ns\foo
*/

?>