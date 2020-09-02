<?php

//課題　問１
$name = "コウイチ";

if ($name =="コウイチ") {
  echo "私は$nameです";
} else {
  echo "私は$nameではありません";
}

//課題　問２
$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;    
}
echo $total;

//課題　問３

$fruits = array("orenge", "apple", "lemon", "melon", "grapes");

foreach($fruits as $fruits){
echo $fruits;
echo "\n";
}

//課題　問４

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

?>