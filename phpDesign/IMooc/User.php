<?php

namespace IMooc;

class User {
    protected $id;
    protected $data;
    protected $db;
    protected $rows;
    protected $change = false;
    
    function __construct($id){
        $this->db = Factory::getDatabase();
        $res = $this->db->query("select * from user where id = $id limit 1");
        $this->data = $this->rows = $res->fetch_assoc();
        $this->id = $id;
    }
    
    function __get($key){
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }
    
    function __set($key, $value){
        $this->data[$key] = $value;
        $this->change = true;
    }
    
    function __destruct(){
        if ($this->change) {
            foreach ($this->data as $k => $v) {
                $keys[] = $k;
                $vals[] = "'{$v}'";
                $keyVals[] = "$k = '{$v}'";
            }
            
            if($this->rows){
                $kvStr = implode(', ', $keyVals);
                $sql = "update user set $kvStr where id = {$this->id} limit 1";
            }else{
                /*                 
                $fields = implode(', ', $keys);
                $datas = implode(', ', $vals);
                $sql = "insert into user($fields) values($datas)"; 
                //*/
            }
            
            // echo $sql;
            $this->db->query($sql);
        }
    }
}