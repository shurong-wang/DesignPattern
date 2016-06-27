<?php
namespace IMooc;

class CanvasDecorator {
    public $data;
    
    // 装饰器 
    protected $decorators = array();
    
    function init($width = 20, $height = 20){
        $data = array();
        for($i = 0; $i < $height; $i ++) {
            for($j = 0; $j < $width; $j ++) {
                $data[$i][$j] = ' * ';
            }
        }
        $this->data = $data;
    }

    function rect($x1, $y1, $x2, $y2){
        foreach ($this->data as $x => $line) {
            if ($x < $x1 or $x > $x2) {
                continue;
            }
            foreach ($line as $y => $char) {
                if ($y < $y1 or $y > $y2) {
                    continue;
                }
                $this->data[$y][$x] = '<span style="color:transparent;"> * </span>';
            }
        }
    }
    
    function draw(){
        // 装饰 start
        $this->beforeDraw();
        
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br/>\n";
        }
        
        // 装饰 end
        $this->afterDraw();
    }
    
    
    /**
     * Decorator
     */ 
    function addDecorator(DrawDecorator $decorator){
        $this->decorators[] = $decorator;
    }
    
    function beforeDraw(){
        //dump($this->decorators);
        
        foreach ($this->decorators as $decorator) {
            $decorator->beforeDraw();
        }
    }
    
    function afterDraw(){
        $decorators = array_reverse($this->decorators);
        
        //dump($decorators);
        
        foreach ($decorators as $decorator) {
            $decorator->afterDraw();
        }
    }
}

