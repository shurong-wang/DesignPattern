<?php
/*
 * PSR-0 规范：
 * ① 命名空间必须与绝对路径一致。 文件里写命名空间从根目录下它所在文件夹开始到它的上一层文件夹名
 * ② 类名首字母必须大写
 * ③ 除入口文件外，其它的".php"文件中只能存在一个类，不能有外部可执行的代码。
 */

define('SP', DIRECTORY_SEPARATOR);
define('BASEDIR', getcwd());
include BASEDIR . SP . 'tests' . SP . 'tools.php';
include BASEDIR . SP . 'IMooc' . SP . 'Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

$app = IMooc\Application::getInstance();
$app->dispatch();

// 请求 URL 格式
// http://localhost/phpDesign/index.php/guide/index/?app=html
// http://localhost/phpDesign/index.php/home/index/?app=html
// http://localhost/phpDesign/index.php/home/index/?app=json
// http://localhost/phpDesign/index.php/home/test_proxy
