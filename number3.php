<?php
    $input = ['xc', 'dz', 'bbb', 'dz'] ;
    $query = ['bbb', 'ac', 'dz'];

    $arr = [];

    foreach($query as $qry){
        $total = 0;
        foreach($input as $inp){
            if($inp == $qry){
                $total++;
            }
        }
        array_push($arr, $total);
    }

    print_r($arr);

    $text1 = $arr[0] > 0 ? 'terdapat '.$arr[0].' pada INPUT' : 'tidak ada pada INPUT';

    $text2 = $arr[1] > 0 ? 'terdapat '.$arr[1].' pada INPUT' : 'tidak ada pada INPUT';

    $text3 = $arr[2] > 0 ? 'terdapat '.$arr[2].' pada INPUT' : 'tidak ada pada INPUT';
    
    echo "karena kata '".$query[0]."' ".$text1.", kata '".$query[1]."' ".$text2.", dan kata '".$query[2]."' ".$text3;
?>