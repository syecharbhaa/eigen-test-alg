<?php
    $string = "Saya sangat senang mengerjakan soal algoritma";
    $array = explode(' ', $string);
    $length = array_map('strlen', $array);
    $key = array_search(max($length), $length);

    echo "kata terpanjang adalah ".$array[$key];
?>