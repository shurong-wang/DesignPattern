<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：工厂模式
 * */

$db = IMooc\Factory::getDatabase('master');
dump($db);