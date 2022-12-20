<?php

$y = 100;

$varfn = fn($i) => $i + $y;


echo $varfn(3);
echo '<hr>';
echo '<pre>';
var_dump($varfn(3));
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($varfn(3));
echo '</pre>';
echo '<hr>';

function my_array_keys($arr){
    $date = [];
    foreach ($arr as $k => $v){
        $date[] = $k;
    }

    return $date;
}

$my_array_keys = function ($arr){
    $date = [];
    foreach ($arr as $k => $v){
        $date[] = $k;
    }

    return $date;
};

$um = [1,2,3];
$name = ['Nazar', 'Taras', 'Max', 'Andriy', 'Olga'];
$name2 = ['name' => 'Andriy', 'year' => '22'];
$test = [];

$key2 = my_array_keys($name);
echo '<pre>';
print_r($key2);
echo '</pre>';


echo '<hr>';
echo '<br>';

echo '<pre>';
print_r($key);
echo '</pre>';