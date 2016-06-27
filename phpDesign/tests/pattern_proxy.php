<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：代理模式
 */

$id = 1;

$proxy = new \IMooc\Proxy();

$res = $proxy->getUserName($id);
dump($res);

$res = $proxy->setUserName($id, 'DouDou');
dump($res);
