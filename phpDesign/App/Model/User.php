<?php
namespace App\Model;

use IMooc\Factory;

/**
 * 观察者模式 -- 订阅消息
 */
class User extends \IMooc\Model {

    function getInfo($id){
        $slave = Factory::getDatabase('slave');
        $sql = "select * from user where id =$id limit 1";
        return $slave->query($sql)->fetch_assoc();
    }

    function create($user){
        $userid = 1;
        $this->notify($user);
        return $userid;
    }
}