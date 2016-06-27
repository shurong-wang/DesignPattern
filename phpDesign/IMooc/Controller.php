<?php
namespace IMooc;

abstract class Controller {
    protected $data;
    protected $controller_name;
    protected $view_name;
    protected $template_dir;

    function __construct($controller_name, $view_name){
        $this->controller_name = $controller_name;
        $this->view_name = $view_name;
        $this->template_dir = Application::getInstance()->base_dir . DIRECTORY_SEPARATOR . 'templates';
    }

    function assign($key, $value){
        $this->data[$key] = $value;
    }

    function display($file = ''){
        if (empty($file)) {
            $file = strtolower($this->controller_name) . DIRECTORY_SEPARATOR . $this->view_name . '.php';
        }
        $template = $this->template_dir . DIRECTORY_SEPARATOR . $file;
        if($this->data){
            extract($this->data);
        }
        if(file_exists(BASEDIR . $template)){
            include $template;
        }else{
            echo 'Template file "', BASEDIR . $template, '" is not found! ';
        }
    }
}