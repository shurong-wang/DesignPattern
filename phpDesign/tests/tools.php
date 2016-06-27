<?php
function dump($obj, $separator = ''){
    $print = $obj;
    if (is_bool($obj)) {
        $print = 'bool(' . ($obj ? 'TRUE' : 'FALSE') . ')';
    }
    if (is_float($obj)) {
        $print = 'float(' . strval($obj) . ')';
    }
    if (is_int($obj)) {
        $print = 'int(' . strval($obj) . ')';
    }
    if (is_null($obj)) {
        $print = 'NULL';
    }
    echo '<pre>';
    if (is_string($obj)) {
        var_dump($obj);
    } else {
        print_r($print);
    }
    echo '</pre>';
    if ($separator) {
        echo '<' . $separator . '>';
    }
}