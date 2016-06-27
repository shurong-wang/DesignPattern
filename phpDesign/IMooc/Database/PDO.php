<?php

namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase {
    /**
     * PDO 是 PHP 数据对象(PHP Data Object) 的缩写
     * @var \PDO
     */
    protected $conn;
    function connect($host, $user, $passwd, $dbname){
        $dsn = "mysql:host=$host;dbname=$dbname";
        // dsn 数据源名称或叫做 DSN，包含了请求连接到数据库的信息
        try {
            $conn = new \PDO($dsn, $user, $passwd);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $this->conn = $conn;
        return $this->conn;
    }
    
    function query($sql){
        return $this->conn->query($sql);
    }
    
    function close(){
        unset($this->conn);
    }
}