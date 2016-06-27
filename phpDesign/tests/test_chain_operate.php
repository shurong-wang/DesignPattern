<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：链式操作
 */
$db = IMooc\Chain::getInstance();
// 不报错误即证明链式操作可行
$db->where('id=1')->order('id desc')->limit(5);

echo '链式调用成功！';