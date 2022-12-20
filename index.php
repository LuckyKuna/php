<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP 1 lesson</h1>

    <?php
        echo '<h2>Echo command</h2>';
    ?>

    <?php
        echo '<h2>Перемінні</h2>';

        $a;
        echo $a. '<br>';
        print_r($a). '<br>';
        var_dump($a). '<br>';
        echo '<br>';


        $a = 159;
        echo $a. '<br>';

        $a = 147.52;
        echo $a. '<br>';

        $a = 'text value';
        echo $a. '<br>';

        $a = '159';
        echo $a. '<br>';
    
        $title = 'title';
        echo $title. '<br>';

        $subtitle = "subtitle";
        echo $subtitle. '<br>';

        $result_text = "Result text {$title}";
        echo $result_text. '<br>';
    
    ?>

    <h2>
        <?php echo 'Константи';  ?>
    </h2>

    <?php 
        $newValue = 1245;
        define("oldValue", "1459");
        // echo $oldValue. '<br>';
        echo oldValue. '<br>';

        echo '<br>';
        echo '<br>';

        // define("oldValue", 1458);
        // echo oldValue. '<br>'; 
    
        const oldValue2 = "7452365";
        echo oldValue2;
    ?>

<hr>
        <?php 
            echo '<h2>Типи даних</h2>';  

            // boolean true | false
        
            // integer int

            // float 

            //string

            $var = true;
            echo $var;
                        echo '<br>';
            var_dump($var);
                        echo '<br>';
            echo gettype($var);

            echo '<br>';
            echo '<hr>';

            $var1 = 76688;
            echo $var1;
                        echo '<br>';
            var_dump($var1);
                        echo '<br>';
            echo gettype($var1);


            echo '<br>';
            echo '<hr>';

            $var2 = 3.1412875673;
            echo (int)$var2;
                        echo '<br>';
            var_dump($var2);
                        echo '<br>';
            echo gettype($var2);

                        echo '<br>';
            echo '<hr>';

            $var3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            echo $var3;
                        echo '<br>';
            var_dump($var3);
                        echo '<br>';
            echo gettype($var3);


        ?>
</body>
</html>