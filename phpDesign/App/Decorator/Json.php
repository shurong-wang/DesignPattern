<?php
namespace App\Decorator;

/**
 * 装饰器模式
 */
class Json {

    function beforeRequest($controller){
    }

    function afterRequest($return_value){
        if (isset($_GET['app']) && 'json' == $_GET['app']) {
            echo json_encode($return_value);
        }
    }
}