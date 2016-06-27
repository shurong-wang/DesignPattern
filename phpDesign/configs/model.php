<?php
/**
 * 观察者模式 -- 添加观察者
 */
$config = array(
    'user' => array(
        'observer' => array(
            'App\Observer\UserAdd1',
            'App\Observer\UserAdd2',
            'App\Observer\UserAdd3',
            //'App\Observer\UserAdd4',
        ),
    ),
);
return $config;