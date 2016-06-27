<?php
namespace App\Controller;

use IMooc\Controller;

class Guide extends Controller {
    
    function index(){
        return $data = array(
            'title' => '大话PHP设计模式',
            'url' => 'http://www.imooc.com/view/236',
            'test' => 'http://localhost/DesignPattern/phpDesign/tests/',
            'home' => 'http://localhost/DesignPattern/phpDesign/index.php/home/',
        );
        
        // 使用装饰器模式代替了以下注释代码：
        /*
         foreach ($data as $k => $v) {
         $this->assign($k, $v);
         }
         $this->display();
        */
    }
}
