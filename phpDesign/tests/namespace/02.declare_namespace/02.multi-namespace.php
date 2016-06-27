<?php
// 在同一个文件中定义多个命名空间
/**
 * Example #2 定义多个命名空间，大括号语法
 */

// 在同一个文件中定义多个命名空间
## 可以在同一个文件中定义多个命名空间，有两种语法形式
/**
 * 2. 大括号语法 Example #3
 */
namespace MyProject {

    const CONNECT_OK = 1;
    class Connection {
        function __construct(){
            echo __METHOD__, "<br/>";
        }
    }
    function connect(){
        echo __FUNCTION__, "<br/>";
    }
}

namespace AnotherProject {

    const CONNECT_OK = 1;
    class Connection {
        static function start(){
            echo __METHOD__, "<br/>";
        }
    }
    function connect(){
        echo __FUNCTION__, "<br/>";
    }
}

// 全局代码
namespace {

    session_start();
    $a = MyProject\connect();
    AnotherProject\Connection::start();
}
