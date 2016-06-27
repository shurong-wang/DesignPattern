<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：单例模式
 * */

$db1 = IMooc\Singleton::getInstance();
$db2 = IMooc\Singleton::getInstance();

var_dump($db1 === $db2);

