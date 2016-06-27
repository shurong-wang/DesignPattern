<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：魔术方法
 */
$obj = new IMooc\Object();

$obj->unprop = 'hi';

echo $obj->unprop;

$obj->unmethod('a', 'b');

IMooc\Object::unstatic('c', 'd');

echo $obj;

$obj('invoke a object as a function');
