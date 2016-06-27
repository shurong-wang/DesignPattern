<?php

namespace IMooc;

class MaleUserStrategy implements UserStrategy {
    
    function showAd(){
        echo "LV 路易威登";
    }
    
    function showCategory(){
        echo "名牌女包";
    }
} 