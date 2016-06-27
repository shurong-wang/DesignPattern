<?php

// 导入操作只影响“非限定名称”和“限定名称”，由于“完全限定名称”是确定的，故不受导入的影响
/**
 * Example #4 导入和完全限定名称
 */

use My\Full\Classname as Another;

$obj = new Another; // instantiates object of class My\Full\Classname
$obj = new \Another; // instantiates object of class Another
$obj = new Another\thing; // instantiates object of class My\Full\Classname\thing
$obj = new \Another\thing; // instantiates object of class Another\thing
?>