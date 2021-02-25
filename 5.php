<?php

$arr  = [1, 12, 36, 4, 55, 66, 27, 89, 59, 101, 1, 66];

var_dump($arr);

echo '<br>';

for($i = 0; $i < count($arr); $i++){
    for($j = $i+1; $j < count($arr); $j++){
        if($arr[$i] === $arr[$j]){
            array_splice($arr, $j, 1);
        };
    };
};

var_dump($arr);