<?php
namespace App\Decorator;

/**
 * 装饰器模式
 */
class Login {

    function beforeRequest($controller){
        session_start();
        if (empty($_SESSION['isLogin'])) {
            header('Location: /login/index/');
            exit();
        }
    }

    function afterRequest($return_value){
    
    }
}