<?php

$x = 3;
$y = $x++;//y=3 | x=4 (+1)                  $x++ means increament x after the line process
$y += ++$x;//y=8 (+5) | x=5  (+1)           ++$x means increament x before the line process

if ($y == 7) {//false
    $x++;
    echo $x . "<br>";
} else if ($y == 8) {//true
    $x--;//x=4 (-1)
    echo $x . "<br>";//print x
} else if ($y == 9) {//false
    $x += 2;
    echo $x . "<br>";
} else {//false
    $x = 0;
    echo $x . "<br>";
}
