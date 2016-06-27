<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

class Event extends \IMooc\EventGenerator {

    function trigger(){
        echo "<p>发送消息 ...</p>\n";
        $this->notify(); // 继承自 EventGenerator
    }
}

class Observer1 implements \IMooc\Observer {

    function update($event_info = null){
        echo "收到消息 -- 执行逻辑1 <br/>\n";
    }
}

class Observer2 implements \IMooc\Observer {

    function update($event_info = null){
        echo "收到消息 -- 执行逻辑2 <br/>\n";
    }
}

$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();