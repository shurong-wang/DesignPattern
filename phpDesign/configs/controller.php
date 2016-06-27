<?php
$config = array(
    'home' => array(
        'decorator' => array(
            //'App\Decorator\Login',
            'App\Decorator\Template',
            'App\Decorator\Json',
        ),
    ),
    'guide' => array(
        'decorator' => array(
            'App\Decorator\Template',
        ),
    ),
    'default' => 'hello world',
);
return $config;