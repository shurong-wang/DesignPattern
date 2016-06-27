<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：原型模式
 * */

$prototype = new IMooc\Canvas();
$prototype->init(15, 15);

$canvas1 = clone $prototype;
$canvas1->rect(1, 2, 6, 7);
$canvas1->draw();

echo '<p>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</p>';

$canvas2 = clone $prototype;
$canvas2->rect(7, 8, 12, 13);
$canvas2->draw();