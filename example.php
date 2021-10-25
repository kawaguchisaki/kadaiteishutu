<?php
function sum1($a, $b){
    $a + $b;
}
echo sum1(3,4) + 10 ."\n";

function sum2($a, $b){
    return $a + $b;
}
echo sum2(3,4) + 10 ."\n";

function sum3($a, $b){
    $result = $a + $b;
    return 100;
}
echo sum3(3,4) + 10 ."\n";

function sum4($a, $b){
  $result = $a + $b;
  echo "hoge1\n";
  return 100;
  $a + b;
}
echo sum4(3,4) + 10 ."\n";
?>