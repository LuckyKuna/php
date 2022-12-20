<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Товари</h1>


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
];

?>

    <?php $i = 1; ?>
    <div class="goods">
        <?php foreach($goods1 as $good){    ?>
        <div class="good item_<?php echo $i; ?>">
            <?php foreach($good as $key => $value){    ?>
            <div class="lable_<?php echo $key ?>">
                <?php echo $value; ?>
            </div>
            <?php } ?>
        </div>
        <?php $i++; ?>
        <?php } ?>
    </div>



</body>

</html>