<?php

//1
$arr1 = range(20,45,1);
$n = sizeof($arr1);
$sum = 0;
for ($i = 0; $i < $n; $i++)
{
    if($arr1[$i] % 5){
    }
    else{
        $sum = $sum + $arr1[$i];
        echo $arr1[$i].' ';

    }
}
echo '<br>';
echo $sum;
echo '<hr>';


//2
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var = $var++;
$var = $var--;
echo $var;
echo '<hr>';


//3
$arr3 = array('a', 'b', 'c', 'd', 'e');
echo '<pre>';
print_r($arr3);
echo '</pre>';
$var = $arr3[1];
$arr3[1] = $arr3[2];
$arr3[2] = $var;
echo '<pre>';
print_r($arr3);
echo '</pre>';
echo '<hr>';


//4
$arr4 = ['Привіт, ','світ','!'];
foreach ($arr4 as $item) {
    echo $item;
}
echo '<hr>';


//5
$string = '7845628956201437560';
echo $string;
echo '<br>';
$num5 = 5;
echo 'Number: '.$num5;
echo '<br>';
$arr5 = str_split($string); 
$l = sizeof($arr5);
for ($i = 0; $i < $l; $i++)
{
    if($arr5[$i] == $num5){
        $k++;
    }
}
echo $k;
echo '<hr>';


//6
$num = 1000;
for($i = 0; ; $i++)
{
    if($num > 50){
    $num /= 2;
    }    
    else{
        $num *= 2;
        $i--;
        break;
    }
}
echo $num;
echo '<br>';
echo $i;
echo '<hr>';


//7
$h = 70;
echo $h;
echo '<br>';
$arr7 = range(1, $h, 1);
$b = sizeof($arr7);
$arr_divine = array();
for ($i = 0; $i < $b; $i++)
{
    if($h % $arr7[$i]){
    }
    else{
        array_push($arr_divine, $arr7[$i]);
    }
}
echo '<pre>';
print_r($arr_divine);
echo '</pre>';
echo '<hr>';


//8
$arr8 = array(1,2,3,4,5,6,7,8,9,10);
$new_arr8 = array();
$n = sizeof($arr8);
for ($i = 0; $i < $n; $i++)
{
    $number = 512; 
    $k = 0;
    while($arr8[$i] <= $number){

        $number = $number - $arr8[$i];
        $k++;
    }
    array_push($new_arr8, $arr8[$i].' -> '.$arr8[$i].' * '.$k.' + '.$number);

}
echo '512';
echo '<br>';
echo '<pre>';
print_r($new_arr8);
echo '</pre>';
echo '<hr>';
