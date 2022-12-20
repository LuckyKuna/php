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

// //
// echo 'array_change_key_case';
// echo '<br>';
// echo '<pre>';
// print_r(array_change_key_case($arr1a, CASE_UPPER));
// echo '</pre>';
// echo '<hr>';
// //
// echo 'array_chunk';
// echo '<br>';
// echo '<pre>';
// print_r(array_chunk($goods1, 2, true));
// echo '</pre>';
// echo '<hr>';
// //
// $array_column = array_column($goods1, 'title');
// echo 'array_column';
// echo '<br>';
// echo '<pre>';
// print_r($array_column);
// echo '</pre>';
// echo '<hr>';
// //
// $array_combine = array_combine($arr2, $arr3);
// echo 'array_combine';
// echo '<br>';
// echo '<pre>';
// print_r($array_combine);
// echo '</pre>';
// echo '<hr>';
// //
// echo 'array_count_values';
// echo '<br>';
// echo '<pre>';
// print_r(array_count_values($arr1));
// echo '</pre>';
// echo '<hr>';
// //
// $array_diff_assoc = array_diff_assoc($arr1a, $arr2a);
// echo 'array_diff_assoc';
// echo '<br>';
// echo '<pre>';
// print_r($array_diff_assoc);
// echo '</pre>';
// echo '<hr>';
// //
// $array_diff_key = array_diff_key($arr1a, $arr2a);
// echo 'array_diff_key';
// echo '<br>';
// echo '<pre>';
// print_r($array_diff_key);
// echo '</pre>';
// echo '<hr>';
//
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}
// $array_diff_uassoc = array_diff_uassoc($arr1, $arr2, 'key_compare_func');
// echo $array_diff_uassoc;
// echo '<br>';
// echo '<pre>';
// print_r($array_diff_uassoc);
// echo '</pre>';
// echo '<hr>';

// $array_diff_ukey = array_diff_ukey($arr1, $arr2, 'key_compare_func');
// echo $array_diff_ukey;
// echo '<br>';
// echo '<pre>';
// print_r($array_diff_ukey);
// echo '</pre>';
// echo '<hr>';
// //
// $array_diff = array_diff($goods1[0], $goods2[0]);
// echo $array_diff;
// echo '<br>';
// echo '<pre>';
// print_r($array_diff);
// echo '</pre>';
// echo '<hr>';
// //
// $array_fill_keys = array_fill_keys($arr1, 'potato');
// echo $array_fill_keys;
// echo '<br>';
// echo '<pre>';
// print_r($array_fill_keys);
// echo '</pre>';
// echo '<hr>';
// //
// $array_fill = array_fill(5, 6, 'banana');
// echo $array_fill;
// echo '<br>';
// echo '<pre>';
// print_r($array_fill);
// echo '</pre>';
// echo '<hr>';
// //
// $array_filter = array_filter($arr1, 'strlen');
// echo 'array_filter';
// echo '<br>';
// echo '<pre>';
// print_r($array_filter);
// echo '</pre>';
// echo '<hr>';
// //
// $array_flip = array_flip($arr2);
// echo 'array_flip';
// echo '<br>';
// echo '<pre>';
// print_r($array_flip);
// echo '</pre>';
// echo '<hr>';
// //
// $array_intersect_assoc = array_intersect_assoc($arr1, $arr2);
// echo 'array_intersect_assoc';
// echo '<br>';
// echo '<pre>';
// print_r($array_intersect_assoc);
// echo '</pre>';
// echo '<hr>';
// //
// $array_intersect_key = array_intersect_key($arr1, $arr2);
// echo 'array_intersect_key';
// echo '<br>';
// echo '<pre>';
// print_r($array_intersect_key);
// echo '</pre>';
// echo '<hr>';
// //
// $array_intersect_uassoc = array_intersect_uassoc($arr1, $arr2, 'strcasecmp');
// echo 'array_intersect_uassoc';
// echo '<br>';
// echo '<pre>';
// print_r($array_intersect_uassoc);
// echo '</pre>';
// echo '<hr>';
// //
// $array_intersect_ukey = array_intersect_ukey($arr1, $arr2, 'key_compare_func');
// echo 'array_intersect_ukey';
// echo '<br>';
// echo '<pre>';
// print_r($array_intersect_ukey);
// echo '</pre>';
// echo '<hr>';
// //
// $array_intersect = array_intersect($arr1, $arr2);
// echo 'array_intersect';
// echo '<br>';
// echo '<pre>';
// print_r($array_intersect);
// echo '</pre>';
// echo '<hr>';
// //
// if (array_is_list(['apple', 2, 3])){
//     echo "array_is_list";
//     echo '<br>';
//     echo '<pre>';
//     print_r($arr2);
//     echo '</pre>'; 
// }
// echo '<hr>';
// //
// $array_key_exists = array_key_exists('Max', $arr1a);
// echo 'array_key_exists';
// var_dump($array_key_exists);
// echo '<br>';
// echo '<hr>';
// //
// $array_key_first = array_key_first($arr1a);
// echo 'array_key_first';
// echo '<br>';
// echo $array_key_first;
// echo '<hr>';
// //
// $array_key_last = array_key_last($arr1a);
// echo 'array_key_last';
// echo '<br>';
// echo $array_key_last;
// echo '<hr>';
// //
// $array_keys = array_keys($arr1a);
// echo 'array_keys';
// echo '<br>';
// echo '<pre>';
// print_r($array_keys);
// echo '</pre>';
// echo '<hr>';
// //
// function cube($n)
// {
//     return ($n.$n.$n);
// }
// $array_map = array_map('cube', $arr2);
// echo 'array_map';
// echo '<br>';
// echo '<pre>';
// print_r($array_map);
// echo '</pre>';
// echo '<hr>';
// //
// $array_merge_recursive = array_merge_recursive($goods2, $arr2a);
// echo 'array_merge_recursive';
// echo '<br>';
// echo '<pre>';
// print_r($array_merge_recursive);
// echo '</pre>';
// echo '<hr>';
// //
// $array_merge = array_merge($goods2[0], $arr2a);
// echo 'array_merge';
// echo '<br>';
// echo '<pre>';
// print_r($array_merge);
// echo '</pre>';
// echo '<hr>';
// //
// $ar1 = array(10, 100, 1000, 0);
// $ar2 = array(1, 3, 2, 4);
// array_multisort($ar1, $ar2);
// echo 'array_multisort';
// echo '<br>';
// echo '<pre>';
// print_r($ar1);
// echo '</pre>';
// echo '<pre>';
// print_r($ar2);
// echo '</pre>';
// echo '<hr>';
// //
// $array_pad = array_pad($arr2, 7, 0);
// echo 'array_pad';
// echo '<br>';
// echo '<pre>';
// print_r($array_pad);
// echo '</pre>';
// echo '<hr>';
// //
// $array_pop = array_pop($arr2);
// echo 'array_pop';
// echo '<br>';
// echo $array_pop;
// echo '<br>';
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';
// echo '<hr>';
// //
// echo 'array_product';
// echo '<br>';
// $a = array(2, 4, 6, 8);
// echo "product(a) = " . array_product($a) . "\n";
// echo '<hr>';
// //
// array_push($arr2, 'Vova');
// echo 'array_push';
// echo '<br>';
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';
// echo '<hr>';
// //
// $array_rand = array_rand($arr2, 2);
// echo 'array_rand';
// echo '<br>';
// echo '<pre>';
// echo $arr2[$array_rand[1]];
// echo '</pre>';
// echo '<hr>';
// //
// $array_reduce = array_reduce();
// echo 'array_reduce';
// echo '<br>';
// echo '<pre>';
// print_r($array_reduce);
// echo '</pre>';
// echo '<hr>';
// //
// $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
// $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

// $array_replace_recursive = array_replace_recursive($base, $replacements);
// echo '<pre>';
// print_r($array_replace_recursive);
// echo '</pre>';
// echo '<hr>';
// //
// $array_replace = array_replace($base, $replacements);
// echo '<pre>';
// print_r($array_replace);
// echo '</pre>';
// echo '<hr>';
// //
// $array_reverse = array_reverse($arr1);
// echo 'array_reverse';
// echo '<br>';
// echo '<pre>';
// print_r($array_reverse);
// echo '</pre>';
// echo '<hr>';
// //
// $array_search = array_search('800', $goods1[0]);
// echo 'array_search';
// echo '<br>';
// echo '<pre>';
// print_r($array_search);
// echo '</pre>';
// echo '<hr>';
// //
// $array_shift = array_shift($arr2);
// echo 'array_shift';
// echo '<br>';
// echo $array_shift;
// echo '<br>';
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';
// echo '<hr>';
// //
// $array_slice = array_slice($arr1, -5, 4, true);
// echo 'array_slice';
// echo '<br>';
// echo '<pre>';
// print_r($array_slice);
// echo '</pre>';
// echo '<hr>';
// //
// array_splice($arr1, -4, 3, $arr3);
// echo 'array_splice';
// echo '<br>';
// echo '<pre>';
// print_r($arr1);
// echo '</pre>';
// echo '<hr>';
// //
// $a = array(2, 4, 6, 8);
// echo 'array_sum'.'<br>';
// echo "sum(a) = " . array_sum($a);
// echo '<hr>';

// $change_key = array_udiff_assoc();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';

// $change_key = array_udiff_uassoc();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';

// $change_key = array_udiff();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';

// $change_key = array_uintersect_assoc();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';

// $change_key = array_uintersect_uassoc();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';

// $change_key = array_uintersect();
// echo $change_key;
// echo '<br>';
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<hr>';
// //
// $array_unique = array_unique($arr1);
// echo 'array_unique';
// echo '<br>';
// echo '<pre>';
// print_r($array_unique);
// echo '</pre>';
// echo '<hr>';
// //
// array_unshift($arr2, 'Vova');
// echo 'array_unshift';
// echo '<br>';
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';
// echo '<hr>';
// //
// echo 'array_values';
// echo '<br>';
// echo '<pre>';
// print_r(array_values($arr1a));
// echo '</pre>';
// echo '<hr>';
// //
function test_print($item, $key)
{
    echo "$key include $item".'<br>';
}
// echo $array_walk_recursive;
// echo '<br>';
// array_walk_recursive($goods1, 'test_print');
// echo '<hr>';
// //
// echo $array_walk;
// echo '<br>';
// array_walk($goods1, 'test_print');
// echo '<hr>';
// //
// $transport = array('foot', 'bike', 'car', 'plane');
// echo '<pre>';
// print_r($transport);
// echo '</pre>';
// $mode = current($transport); // $mode = 'foot';
// echo 'current - '.$mode;
// echo '<br>';
// $mode = next($transport);    // $mode = 'bike';
// echo 'next - '.$mode;
// echo '<br>';
// $mode = next($transport);    // $mode = 'car';
// echo 'next - '.$mode;
// echo '<br>';
// $mode = prev($transport);    // $mode = 'bike';
// echo 'prev - '.$mode;
// echo '<br>';
// $mode = end($transport);     // $mode = 'plane';
// echo 'end - '.$mode;
// echo '<br>';
// $mode = reset($transport);   // $mode = 'foot';
// echo 'reset - '.$mode;
// echo '<hr>';

// echo 'arsort';
// echo '<hr>';
// echo 'asort';
// echo '<hr>';
// echo 'compact';
// echo '<hr>';
// echo 'each';
// echo '<hr>';
// echo 'extract';
// echo '<hr>';
// echo 'in_array';
// echo '<hr>';
// echo 'key_exists';
// echo '<hr>';
// echo 'key';
// echo '<hr>';
// echo 'krsort';
// echo '<hr>';
// echo 'ksort';
// echo '<hr>';
// echo 'list';
// echo '<hr>';
// echo 'natcasesort';
// echo '<hr>';
// echo 'natsort';
// echo '<hr>';
// echo 'range';
// echo '<hr>';
// echo 'rsort';
// echo '<hr>';
// echo 'shuffle';
// echo '<hr>';
// echo 'sizeof';
// echo '<hr>';
// echo 'sort';
// echo '<hr>';
// echo 'uasort';
// echo '<hr>';
// echo 'uksort';
// echo '<hr>';
// echo 'usort';
// echo '<hr>';

