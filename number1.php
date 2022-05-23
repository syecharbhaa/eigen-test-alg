<?php
    $string = "NEGIE1";

    $array = preg_split('/(?<=\D)(?=\d)|\d+\K/', $string);

    $str = strrev($array[0]);
    $str = $str.$array[1];
    
    print_r($str);
?>