<?php

namespace IMooc;

// 发布者
abstract class EventGenerator {
    private $observers = array();

    // 添加观察者
    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }

    // 发布消息
    function notify(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

} 