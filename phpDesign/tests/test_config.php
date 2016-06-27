<?php
define('SP', DIRECTORY_SEPARATOR);
define('BASEDIR', dirname(getcwd()));
include BASEDIR . SP . 'tests' . SP . 'tools.php';
include BASEDIR . SP . 'IMooc' . SP . 'Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 配置与设计模式：
 *  1. php 中使用 ArrayAccess 实现配置文件的加载
 *  2. 在工厂方法中读取配置，生成可配置化对象
 *  3. 使用装饰模式实现权限验证、模板渲染、json串化
 *  4. 使用观察者模式实现数据更新事件的一系列更新操作
 *  5. 使用代理模式实现数据库的主从自动切换
 * */

/**
 * 测试：自动加载配置文件
 * */

$path = BASEDIR . SP . 'configs';

$config = new \IMooc\Config($path);

dump($config['database']);
