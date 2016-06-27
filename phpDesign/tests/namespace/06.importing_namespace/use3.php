<?php

// 导入操作是在编译执行的，但动态的类名称、函数名称或常量名称则不是

/**
 * Example #3 导入和动态名称
 */

use My\Full\Classname as Another;

$obj = new Another; // 实例化一个 My\Full\Classname 对象

$a = 'Another';
$obj = new $a;      // 实例化的就是  Another 对象，而不是  My\Full\Classname 对象
?>