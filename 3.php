<?php

for($i=0;$i < 11;$i++){
    if($i <= 5){
        for($j=0;$j < $i;$j++){
            echo '*';
        };
    }else{
        for($j=10;$j >= $i;$j--){
            echo '*';
        }
    }
    echo '<br>';
};