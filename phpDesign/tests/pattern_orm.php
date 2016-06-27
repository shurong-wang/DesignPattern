<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：数据对象映射模式
 */

class Page {
    function index(){
        $user = IMooc\Factory::getUser(1);
        
        dump($user->name);
        
        $user->name = 'ShuJun';
        $user->mobile = '16822004988';
    }
    
    function test(){
        $user = IMooc\Factory::getUser(1);
    
        dump($user->name);
    }
    
}

$page = new Page();
$page->index();
$page->test();
