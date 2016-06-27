<?php
namespace App\Controller;

use IMooc\Controller;
use IMooc\Factory;

class Home extends Controller {
    
    function index(){
        $userModel = Factory::getModel('User');
        
        /**
         * 观察者模式  -- 松耦合
         */
        $userid = $userModel->create(array(
            'name' => 'XinYan',
            'mobile' => '152xxxx1314' 
        ));
        
        /**
         * 装饰器模式  -- 通过装饰器，将变量输出到模板
         */
        $data = array(
            'userid' => $userid,
            'name' => 'XinYan' 
        );
        
        // 使用装饰器模式代替了以下注释代码：
        /*
        foreach ($data as $k => $v) {
            $this->assign($k, $v);
        }
        $this->display();
        */
        
        return $data;
    }

    function test_proxy(){
        $db = Factory::getDatabase('proxy');
        
        /**
         * 代理模式  -- 通过代理，实现读写分离
         */
        $db->query("select * from user");
        $db->query("delete from user where id=11");
        $db->query("update user set name='RongRong' where id=12");
    }
}
