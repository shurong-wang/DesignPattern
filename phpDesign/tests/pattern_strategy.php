<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：策略模式
 */
class Page {
    protected $stategy;
    public function index(){
        // 没有 if else 逻辑判断
        echo 'AD: ';
        $this->strategy->showAd();
        
        echo '<br>';
        
        echo 'Category: ';
        $this->strategy->showCategory();
    }
    
    public function setStrategy(\IMooc\UserStrategy $stategy){
       $this->strategy = $stategy;
    }
}


if(isset($_GET['male'])){
    $stategy = new \IMooc\MaleUserStrategy();
}else{
    $stategy = new \IMooc\FemaleUserStrategy();
}

$page = new Page();
$page->setStrategy($stategy);
$page->index();