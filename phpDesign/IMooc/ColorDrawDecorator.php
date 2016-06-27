<?php
namespace IMooc;

// 装饰器模式
class ColorDrawDecorator implements DrawDecorator {
    protected $color;

    function __construct($color = 'gold'){
        $this->color = $color;
    }

    function beforeDraw(){
        echo "<div style='color: {$this->color};'>";
    }

    function afterDraw(){
        echo "</div>";
    }
}