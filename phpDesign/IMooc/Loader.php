<?php

namespace IMooc;

class Loader {
    static function autoload($class){
        $path = BASEDIR . '/' . $class;
        $file = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path) . '.php';
        require $file;
    }
}