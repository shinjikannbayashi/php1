<?php
function a($c){
  // $result は結果を保存する変数。
  $result = 2 * $c;

  return $result;
  //$result を戻り値にする。
}
echo a(2);
//()　の中に数字を入れる。

function f($a, $b){
return $a += $b;
}
echo f(126, 345);

$arr = array(1,3,5,7,9);
echo array_product($arr);


function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a>$max_number){
      $max_number = $a;

    }
  }
  return $max_nunber;
}
 $value = ["apple", "banana", "orange"];
echo max_array($value);





$k = "<h1>HTML<h1>";
echo strip_tags($k);

$f = array(1);
array_push($f,2);
var_dump($f);
echo '<br>';

$g = [
  1 => "猫"
];
$f = [
  1 => "犬"
];

$h = array_merge($g,$f);
var_dump($h);

echo time();

$t = mktime();
echo $t;


echo date('Y/m/d', time());

?>
