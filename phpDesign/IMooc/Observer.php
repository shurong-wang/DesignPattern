<?php

namespace IMooc;

// 订阅者（观察者）
interface Observer {
    // 订阅消息
    function update($event_info = null);
}