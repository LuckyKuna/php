<?php

$a = 5;
$b = 6;
$c = 7;

if ( $a){
    echo '$a = '.$a;
}
if ( !$a){
    echo '$a = '.$a;
}
echo '<br>';
echo '<hr>';

if ( $a == 5 && $b > 5 && $c >= 7){
    echo '$a = '.$a.' $b > 5';
}
echo '<br>';
echo '<hr>';

if ( $a > 5 || $b > 5 || $c > 5){
    echo '$a or $b or $c > 5';
}
echo '<br>';
echo '<hr>';