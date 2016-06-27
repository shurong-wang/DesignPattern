<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：适配器模式
 * */

$host = '127.0.0.1';
$user = 'root';
$passwd = 'root';
$dbname = 'test';

$pdo = new IMooc\Database\PDO();
$db = $pdo->connect($host, $user, $passwd, $dbname);
dump($db);

$mysqli = new IMooc\Database\MySQLi();
$db = $mysqli->connect($host, $user, $passwd, $dbname);
dump($db);