

<?php

$text = "This is \"string\" \$var";
echo $text;

echo '<br>'; 

//heredoc
//nowdoc

$text2 = <<<HERE
This is "string" \$var
HERE;

echo $text2;

echo <<<END
 a
  b
   c
    d
    /n
    e
    f
    g
END;

echo '<h2>Арифметичні операції</h2>';
// + - * / 
// -$a зміна знаку
// $a % $b ділення по модулю
// $a ** $b  степінь
// = присвоєння
// & присвоэння по посиланню
// ++$а префікс інкремент
// $a++ постфікс інкремент
// --$a префікс декремент
// $a-- постфікс декремент
// . конкатація(склеювання)

$a = 5;
$b = 8;

echo $a + $b;
echo '<br>'; 
echo $a - $b;
echo '<br>'; 
echo $a * $b;
echo '<br>'; 
echo $a / $b;
echo '<br>'; 
echo -$a;
echo '<br>'; 
echo $a % $b;
echo '<br>'; 
echo $a ** $b;
echo '<br>'; 
echo $a = $b;
echo '<br>'; 
echo $a & $b;
echo '<hr>'; 

define("element1",143);
define("element2",125);

echo element1;
echo '<br>'; 
echo element2;
echo '<hr>'; 

$inkriment1 = 159;
echo $inkriment1;
echo '<br>'; 
$inkriment2 = ++$inkriment1;
echo '$inkrement2 =' .$inkriment2;
echo '<br>'; 
echo '$inkrement1 =' .$inkriment1;
echo '<br>'; 
$inkriment3 = $inkriment1++;
echo '$inkrement3 =' .$inkriment3;
echo '<br>'; 
echo '$inkrement1 =' .$inkriment1;




