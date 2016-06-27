<?php
/***
 * Example #2 动态访问命名空间的元素
 */

namespace namespacename;

class classname {
    function __construct(){
        echo __METHOD__, "<br/>";
    }
}
function funcname(){
    echo __FUNCTION__, "<br/>";
}
const constname = "namespaced";

/**
 * *************************************************************************
 * 引入文件
 */
include 'example1.php';

/**
 * *************************************************************************
 * 直接调用不明确指定命名空间，默认包含命名空间
 */
new classname(); // prints: namespacename\classname::__construct
funcname(); // prints: namespacename\classname::__construct
echo constname, "<hr/>"; // prints namespaced

/**
 * *************************************************************************
 * 动态调用时，如果不指定命名空间，则不包含命名空间
 */

$a = 'classname';
$obj = new $a(); // prints: classname::__construct

$b = 'funcname';
$b(); // prints: funcname

echo constant('constname'), "<hr/>"; // prints: global

/**
 * *************************************************************************
 * 直接态调用时，如果要使用命名空间，则必须使用完全限定（包括命名空间前缀：左边第一个 \）
 */
\namespacename\funcname(); // prints: namespacename\classname::__construct
$obj = new \namespacename\classname(); // prints: namespacename\classname::__construct
echo \namespacename\constname, "<hr/>"; // prints namespaced

/*
// Fatal error: Call to undefined function namespacename\namespacename\funcname()
namespacename\funcname();

// Fatal error: Class 'namespacename\namespacename\classname' not found
$obj = new namespacename\classname();

// Fatal error: Undefined constant 'namespacename\namespacename\constname'
echo namespacename\constname, "<hr/>";
*/

/**
 * *************************************************************************
 * 动态调用时，限定和完全限定没有区别，因此其前导的反斜杠可以省略
 */
/* if using double quotes, "\\namespacename\\classname" must be used */
$b = 'namespacename\funcname';
$b(); // also prints: namespacename\funcname

$a = 'namespacename\classname';
$obj = new $a(); // also prints: namespacename\classname::__construct

echo constant('namespacename\constname'), "<hr/>"; // also prints: namespaced

?>