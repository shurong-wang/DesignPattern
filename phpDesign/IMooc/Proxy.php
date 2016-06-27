<?php

namespace IMooc;

class Proxy implements IUserProxy {

    function getUserName($id){
        $db = Factory::getDatabase('slave');
        $res = $db->query("select name from user where id =$id limit 1");
        return $res->fetch_assoc()['name'];
    }

    function setUserName($id, $name){
        $db = Factory::getDatabase('master');
        return $db->query("update user set name = '$name' where id =$id limit 1");
    }
}