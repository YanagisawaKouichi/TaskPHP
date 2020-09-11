<?php

//課題１

function f($a) {
     return $a *2;
}
echo f(5);

//課題２

function s($A, $b) {
    return $A + $b;
}
echo s(10, 20);


//課題３
$arr =  array(1, 3, 5, 7, 9);
function num($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
    echo num($arr);
    
// 課題４

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
 return $max_naumber;
}
echo max_array(array(4, 8, 15, 56 ,100));

//課題　５
//strip_tagsの使い方
$str = "<h1>strip_tags関数</h1>"
   . "<p>タグ取り除くよっ！</p>";
   echo strip_tags($str) . "\n";
   
//array_pushの使い方   
$members=array("一郎", "二郎", "三郎");
         array_push($members, "四郎", "五郎");
         echo print_r($members);
         
//array_mergeの使い方
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);

echo print_r($array);

//time,mktimeの使い方
$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo print('<br/>');

//dateも使い方
echo date('Y/m/d');
echo '<br>';
?>
