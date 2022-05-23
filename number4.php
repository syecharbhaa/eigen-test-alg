<?php
    $matrix = [
        [1,2,0],
        [4,5,6],
        [7,8,9]
    ];

    $count_matrix = count($matrix);
    
    $diagonal1 = [];
    $diagonal2 = [];
    
    $i = 0;
    for($j = 0; $j < $count_matrix; $j++){
        array_push($diagonal1, $matrix[$i++][$j]);
        array_push($diagonal2, $matrix[$j][$count_matrix - $i]);
    }

    echo "diagonal pertama = ".$diagonal1[0]." + ".$diagonal1[1]." + ".$diagonal1[2]." = ".array_sum($diagonal1)."</br>";
    echo "diagonal kedua = ".$diagonal2[0]." + ".$diagonal2[1]." + ".$diagonal2[2]." = ".array_sum($diagonal2)."</br>";
    echo "maka hasilnya adalah ".array_sum($diagonal1)." - ".array_sum($diagonal2)." = ".array_sum($diagonal1) - array_sum($diagonal2); 
?>