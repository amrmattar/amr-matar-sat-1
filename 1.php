<?php

$arr  =[1,12,36,4,55,6,27,89,59,101,11,12];
$max = $arr[0];
$min = $arr[0];

for($i=1;$i < count($arr);$i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }
    if($arr[$i] < $min){
        $min = $arr[$i];
    }
};

echo 'maximum number:'.$max;
echo '<br>';
echo 'minimum number:' . $min;