<?php

//課題１

function f($a) {
     return $a *2;
}
echo f();

//課題２

function f($a, $b) {
    return  $a + $b; 
}    
echo f(3,2)

//課題３

function num($arr) {
    $result = 1;
    fareach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
    echo naum(array(1, 3, 5, 7, 9));
    
// 課題４

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_naumber < a)
        {
            $max_number = $a;
        }
    }
 return $max_naumber;
}
echo max_array(array(4, 8, 15, 56 ,100))

//課題　５



?>
