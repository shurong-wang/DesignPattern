<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：装饰器模式
 * */

$canvas = new IMooc\CanvasDecorator();
$canvas->init(17, 15);
$canvas->rect(4, 3, 12, 11);

// 添加颜色装饰器
$canvas->addDecorator(new \IMooc\ColorDrawDecorator('green'));

// 添加尺寸装饰器
$canvas->addDecorator(new \IMooc\SizeDrawDecorator(8));

$canvas->draw();
