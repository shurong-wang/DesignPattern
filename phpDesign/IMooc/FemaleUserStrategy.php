<?php

namespace IMooc;

class FemaleUserStrategy implements UserStrategy {
    function showAd(){
        echo "大疆 Phantom 3 Standard";
    }
    function showCategory(){
        echo "数码产品";
    }
} 