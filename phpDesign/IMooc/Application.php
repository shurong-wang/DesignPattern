<?php

namespace IMooc;

class Application {
    public $base_dir;
    protected static $instance;
    
    public $config; // 配置文件对象

    protected function __construct($base_dir){
        $this->base_dir = $base_dir;
        /**
         * 自动加载配置文件
         * @var \IMooc\Application $config
         */
        $this->config = new Config($base_dir . DIRECTORY_SEPARATOR . 'configs');
    }

    static function getInstance($base_dir = ''){
        if (empty(self::$instance)) {
            self::$instance = new self($base_dir);
        }
        return self::$instance;
    }

    function dispatch(){
        // $uri = $_SERVER['SCRIPT_NAME'];
        list($root, $uri) = explode('index.php', $_SERVER['REQUEST_URI']);
        if(! $uri){
            $uri = '/guide/index/?app=html';
            $_GET['app'] = 'html';
        }
        
        list($ctrler, $method) = explode('/', trim($uri, '/'));
        $ctrler_class = '\\App\\Controller\\' . ucwords($ctrler);
        $request = new $ctrler_class(ucwords($ctrler), $method);
        $response = $request->$method();
        
        /**
         * 装饰器模式 -- 通过装饰器，实现将变量输出到模板等
         */
        $controller_config = $this->config['controller'];
        if(isset($controller_config[strtolower($ctrler)]['decorator'])){
            $conf_decorator = $controller_config[strtolower($ctrler)]['decorator'];
            $decorators = array();
            if (isset($conf_decorator)) {
                foreach ($conf_decorator as $decorator_class) {
                    $decorators[] = new $decorator_class();
                }
            }
            foreach ($decorators as $decorator) {
                $decorator->beforeRequest($request);
            }
            foreach ($decorators as $decorator) {
                $decorator->afterRequest($response);
                
                // 使用装饰器模式代替了以下注释代码：
                /*
                foreach ($data as $k => $v) {
                    $this->assign($k, $v);
                }
                $this->display();
                */
            }
        }
        
    }
}