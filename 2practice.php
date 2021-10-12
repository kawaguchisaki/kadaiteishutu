<?php
//課題１
$name = "Saki";
if ($name == "Saki"){
    echo "私は $name です。";
    echo "\n";
} else {
    echo "あなたの名前ではありません。";
    echo "\n";
}

//課題２
$total = 0;
for ($i = 0; $i <=1000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//課題３
$fruits = array("lemon","banana","peach","melon","orange");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題４
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
?>