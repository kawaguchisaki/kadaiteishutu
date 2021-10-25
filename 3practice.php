<?php
<<<<<<< HEAD

//課題１
function double($max){
   return $max*2;
=======
/*
課題１
function double($max){
    $result = $max*2;
    return $result;
>>>>>>> origin/master
}
echo double(2);
echo "\n";

echo double(9);
echo "\n";


<<<<<<< HEAD
//課題２
function add($a, $b){
   return $a + $b;
=======
課題２
function add($a, $b){
    $result = $a + $b;
    return $result;
>>>>>>> origin/master
}
echo add(1,2);
echo "\n";

echo add(4,9);
echo "\n";



<<<<<<< HEAD
//課題３
=======
課題３
>>>>>>> origin/master
function multiply($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
<<<<<<< HEAD
    }
=======
}
>>>>>>> origin/master
    return $result;
}
echo multiply(array(1,3,5,7,9));
echo "\n";


<<<<<<< HEAD
//課題４
=======
課題４
>>>>>>> origin/master

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
<<<<<<< HEAD

echo max_array([3,6,2,9,1]);
echo "\n";

//課題５
//strip_tags

$str = "<h1>ここのタグは消す</h1><p>ここのタグは残す</p><h2>残す</h2><p>残す</p>";
echo strip_tags($str,"<p><h2>");
echo "\n";

//array_push
$stack =["a","b"];
array_push($stack,"c","d");
var_dump($stack);
echo "\n";

//array_merge
=======
echo max_array([3,6,2,9,1]);

課題５

$str = "<h1>ここのタグは消す</h1><p>ここのタグは残す</p><h2>残す</h2><p>残す</p>";
echo strip_tags($str,"<p><h2>");


$stack =["a","b"];
array_push($stack,"c","d");
var_dump($stack);

>>>>>>> origin/master
$array1 = ["a","b"];
$array2 = ["c","d","e"];
$array3 = ["f","g"];
$allarray = array_merge($array1,$array2,$array3);
print_r($allarray);

<<<<<<< HEAD
//time
echo time();
echo "\n";

//mktime
$time = mktime(0, 0, 0, 1, 1, 2021);
print_r(date("Y年m月d日h時i分s秒",$time));
echo "\n";


//date
echo date('Y-m-d H:i:s');
echo "\n";
=======

echo time();
*/

$time = mktime(0, 0, 0, 1, 1, 2021);
print_r(date("Y年m月d日h時i分s秒",$time));

echo date('Y-m-d H:i:s');
>>>>>>> origin/master
?>

