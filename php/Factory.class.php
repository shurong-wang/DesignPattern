<?php
header("Content-Type:text/html; charset=utf-8");

// 工厂模式
class Factory{
	public static function getInstance($className){
		if(file_exists( './dao/' . $className . '.class.php' ) && class_exists($className)){
			return new $className();
		}else{
			return null;
		}
		
	}
}

$mysql = Factory::getInstance('MySQL');
$oracel = Factory::getInstance('Oracel');