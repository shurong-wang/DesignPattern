<?php
namespace IMooc;

// 装饰器模式
class SizeDrawDecorator implements DrawDecorator {
    protected $size;

    function __construct($size = '14px'){
        $this->size = $size;
    }

    function beforeDraw(){
        echo "<div style='font-size: {$this->size};'>";
    }

    function afterDraw(){
        echo "</div>";
    }
}