<?php

$goods1 = [
    [
        'title' => 'Iphone 12 Pro MAX',
        'price' => 800,
        'state' => 'new',
    ],
    [
        'title' => 'Iphone 11 Pro',
        'price' => 600,
        'state' => 'new',
    ],
    [
        'title' => 'Iphone 8 Plus',
        'price' => 200,
        'state' => 'used',
    ],
];
$goods2 = [
    [
        'title' => 'Iphone 12 Pro MAX',
        'price' => 700,
        'state' => 'used',
    ],
    [
        'title' => 'Google Pixel 6',
        'price' => 500,
        'state' => 'new',
    ],
    [
        'title' => 'Google Pixel 3',
        'price' => 100,
        'state' => 'used',
    ],
];

$arr1a = array('Max' => 'Max','Olga' => 'Olga','Taras' => 'Taras','Nazar' => 'Nazar','Sergiy' => 'Sergiy','Andriy' => 'Andriy','Pavlo' => 'Pavlo');
$arr2a = array('Max' => 'Max','Nazar' => 'Nazar','Taras' => 'Taras','Sergiy' => 'Sergiy','Pavlo' => 'Pavlo');

$arr1 = array('Max','Olga','Taras','Nazar','Sergiy','Andriy','Pavlo','Max', 0, 1454, NULL, '');
$arr2 = array('Max','Nazar','Taras','Sergiy','Pavlo');
$arr3 = array('Max','Nazar','Taras','Sergiy','Pavlo');

$a = 5;
$b = 6;
$c = 7;

if ( $a > 6 || $b > 7){
    echo '$a > 6';
}elseif( $a < 6 || $b < 7){
    echo '$a < 6 || $b < 7';
}else{
    echo 'else';
}
// else {
//     if( $b < 7){
//         echo '$b <7';
//     }
//     if ($a < 6){
//         echo '$a < 6';
//     }
// }

$var = 123;

if ( $var == 121){
    echo 121;
}elseif( $var == 122){
    echo 122;
}elseif ($var == 123){
    echo 123;
}else{
    echo 'NULL';
}
echo '<br>';
echo '<hr>';

$var = 150;
switch($var){
    case 121:
        echo '121';
        break;
    case 122:
        echo '122';
        break;
    case 123:
        echo '123';
        break;
    case 124:
        echo '124';
        break;
    default:
        echo 'NULL';
}
echo '<br>';
echo '<hr>';



$arr2[5] = 'Nazar';
$arr2[] = 'Nazar';
echo '<pre>';
print_r($arr2);
echo '</pre>';




echo '<br>';
echo '<hr>';