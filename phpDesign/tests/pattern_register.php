<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：注册树模式
 * */

$key = 'db1';
$db = IMooc\Register::get($key);
dump($db);

if (! $db) {
    $db = new IMooc\Database\MySQLi();
    $db->connect('127.0.0.1', 'root', 'root', 'test');
    IMooc\Register::set($key, $db);
}

$db = IMooc\Register::get($key);
dump($db);