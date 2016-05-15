<?php
header("Content-Type:text/html; charset=utf-8");

// 单例模式（实现一）
class Singleton{
	//私有化构造方法，禁止外部实例化对象
	private function __construct(){}
	//私有化__clone，防止对象被克隆
	private function __clone(){}
	//私有化内部实例化的对象
	private static $instance = null;

	public static function getInstance(){
		if(self::$instance == null){
			//内部实例化对象
			self::$instance = new self();
		}
		return self::$instance;
	}
}

$a = Singleton::getInstance();
$b = Singleton::getInstance();
var_dump($a === $b);

// 单例模式（实现二）
class Common {
    private $_objects;  //保存所有实例化好的对象
    public function getObject($c_name) {
        if(!isset($this->_objects[$c_name])) {
            $this->_objects[$c_name] = new $c_name;
        }
        return $this->_objects[$c_name];
    }
}
class C {}

$common = new Common();
$c1 = $common->getObject('C');
$c2 = $common->getObject('C');
var_dump($c1 === $c2);
