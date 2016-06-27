<?php
namespace App\Decorator;

/**
 * 装饰器模式
 */
class Template {
    /**
     * @var \IMooc\Controller
     */
    protected $controller;

    function beforeRequest($controller){
        $this->controller = $controller;
    }

    function afterRequest($response){
        if (isset($_GET['app']) && 'html' == $_GET['app']) {
            if($response){
                foreach ($response as $k => $v) {
                    $this->controller->assign($k, $v);
                }
            }
            $this->controller->display();
        }
    }
}