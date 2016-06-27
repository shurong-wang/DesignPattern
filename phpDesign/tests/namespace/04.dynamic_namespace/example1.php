<?php
/***
 * Example #1 动态访问元素
 */

class classname {
    function __construct(){
        echo __METHOD__, "<br/>";
    }
}

function funcname(){
    echo __FUNCTION__, "<br/>";
}

const constname = "global";

/* 
$a = 'classname';
$obj = new $a(); // prints: classname::__construct

$b = 'funcname';
$b(); // prints funcname

echo constant('constname'), "<hr/>"; // prints: global 
*/
?>