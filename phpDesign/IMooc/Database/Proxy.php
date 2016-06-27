<?php

namespace IMooc\Database;

use IMooc\Factory;

class Proxy {
    function query($sql){
        if (substr($sql, 0, 6) == 'select') {
            echo "代理-读操作-请求从服务器：$sql<br/>";
            return Factory::getDatabase('slave')->query($sql);
        } else {
            echo "代理-读操作-请求主服务器：$sql<br/>";
            return Factory::getDatabase('master')->query($sql);
        }
    }
}