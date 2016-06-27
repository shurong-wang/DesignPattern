<?php

namespace IMooc;

/**
 * 工厂模式
 */
class Factory {
    static $proxy = null;

    static function getDatabase($id = 'master'){
        /**
         * 代理模式 -- 拦截
         */
        if ($id == 'proxy') {
            if (! self::$proxy) {
                self::$proxy = new \IMooc\Database\Proxy();
            }
            return self::$proxy;
        }
        
        /**
         * 单例模式
         */
        $app = Application::getInstance();
        
        /**
         * 自动加载配置文件
         */
        if ($id == 'slave') {
            $slaves = $app->config['database']['slave'];
            $slave_id = array_rand($slaves);
            $db_conf = $slaves[$slave_id];
        } else {
            $db_conf = $app->config['database'][$id];
        }
        
        /**
         * 注册树模式
         */
        $key = 'database_' . $id;
        $db = Register::get($key);
        if (! $db) {
            $db = new Database\MySQLi();
            $db->connect(
                    $db_conf['host'], 
                    $db_conf['user'], 
                    $db_conf['password'], 
                    $db_conf['dbname']
                );
            Register::set($key, $db);
        }
        return $db;
    }

    /**
     *
     * @param
     *            $id
     * @return User
     */
    static function getUser($id){
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (! $user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    /**
     *
     * @param
     *            $name
     * @return bool
     */
    static function getModel($name){
        $key = 'app_model_' . $name;
        $model = Register::get($key);
        if (! $model) {
            $class = '\\App\\Model\\' . ucwords($name);
            $model = new $class();
            Register::set($key, $model);
        }
        return $model;
    }

}