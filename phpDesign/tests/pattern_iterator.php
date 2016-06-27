<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：迭代器模式
 */

$users = new \IMooc\AllUser();

// 使用迭代器模式，即可直接用 foreach 遍历对象属性
foreach ($users as $user) {
    dump($user->name);
    $user->regtime = date('Y-m-d H:i:s');
}