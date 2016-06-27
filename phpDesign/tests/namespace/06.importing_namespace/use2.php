<?php

/**
 * Example #2 通过 use 操作符导入/使用别名，一行中包含多个 use 语句
 */
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // 实例化 My\Full\Classname 对象
NSname\subns\func(); // 调用函数 My\Full\NSname\subns\func
?>