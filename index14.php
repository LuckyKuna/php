<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 

    if (isset($_POST['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo '<hr>';   
}
if (isset($_GET['send'])){
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    echo '<hr>';   
}

    ?>


    <form action="" method="POST">

        <div>
            <input type="text" name="name" placeholder="Введіть Ім'я">
        </div>
        <div>
            <textarea name="text" id="" cols="30" rows="10" placeholder="Введіть текст"></textarea>
        </div>
        <div>
            <button type="reset"> Reset</button>
            <button type="submit" name="send" value="send"> Send</button>
        </div>


    </form>
    <form action="" method="POST">

        <div>
            <input type="text" name="name" placeholder="Введіть Ім'я">
        </div>
        <div>
            <input type="checkbox" name="CHECK" id="for_CHECK">
            <label for="for_CHECK">CHECK</label>
        </div>
        <div>
            <input type="checkbox" name="CHECK2" id="for_CHECK2" checked>
            <label for="for_CHECK2">CHECK2</label>
        </div>
        <div>
            <input type="radio" name="olds" value="15" id="olds15">
            <label for="olds15">15</label>
            <input type="radio" name="olds" value="15" id="olds25">
            <label for="olds25">25</label>
            <input type="radio" name="olds" value="15" id="olds35">
            <label for="olds35">35</label>
            <input type="radio" name="olds" value="15" id="olds45">
            <label for="olds45">45</label>
            <input type="radio" name="olds" value="15" id="olds55">
            <label for="olds55">55</label>
        </div>
        <div>
            <select name="level" id="">
                <option value="level 1">level 1</option>
                <option value="level 2">level 2</option>
                <option value="level 3">level 3</option>
                <option value="level 4">level 4</option>
                <option value="level 5">level 5</option>
            </select>
        </div>
        <div>
            <select name="lang[]" id="" multiple>
                <option value="UK">UK1</option>
                <option value="ENG">ENG</option>
                <option value="DE">DE</option>
                <option value="ESP">ESP</option>
            </select>
        </div>
        <div>
            <textarea name="text" id="" cols="30" rows="10" placeholder="Введіть текст"></textarea>
        </div>
        <div>
            <button type="reset"> Reset</button>
            <button type="submit" name="send" value="send2213"> Send</button>
        </div>


    </form>

    <?php if (isset($_POST['send'])){ ?>
    <div> Введена інформація</div>
    <?php if (!empty($_POST['name'])){ ?>
    <div> Ім'я: <?php echo $_POST['name']; ?></div>
    <?php } ?>

    <div> Текст: <?php echo !empty($_POST['text']) ? nl2br($_POST['text']) : 'Коментарі відсутні' ?></div>

    <div> CHECK : <?php echo !empty($_POST['CHECK'])&& $_POST['CHECK']=='on' ? 'CHECK' : 'NO CHECK' ?></div>
    <div> CHECK2 : <?php echo !empty($_POST['CHECK2'])&& $_POST['CHECK2']=='on' ? 'CHECK 2' : 'NO CHECK' ?></div>
    <div> </div>
    <div> </div>
    <?php } ?>

    <?php

echo '<hr>';
echo '<br>';
echo date("H:i:s");
$min = substr(date("i"), 1);
    if ($min == '3' ||$min % 4 ||$min == '9'){
        echo '<div style="height: 50px; width: 50px; border-radius: 50%; background-color:red;"></div>'; 
        echo '<div style="height: 50px; width: 50px; border-radius: 50%; background-color:grey;"></div>';     
    }
    else{
        echo '<div style="height: 50px; width: 50px; border-radius: 50%; background-color:gray;"></div>';
        echo '<div style="height: 50px; width: 50px; border-radius: 50%; background-color:green;"></div>';
    }

echo '<pre>';
// print_r($key);
echo '</pre>';

?>
    <div id='current-time'></div>
    <div id="red" style="height: 50px; width: 50px; border-radius: 50%; background-color:gray;"></div>
    <div id="green" style="height: 50px; width: 50px; border-radius: 50%; background-color:gray;"></div>
    <script>
    setInterval(function() {
        let d = new Date();
        document.getElementById('current-time').innerHTML = new Date().toTimeString();
        let minutes = d.getSeconds();
        let min = minutes.toString();
        min = min.substring(1);
        var x = document.getElementById("red");
        var y = document.getElementById("green");
        if (min == '3' || min % 4 || min == '9') {
            x.style.backgroundColor = "red";
            y.style.backgroundColor = "grey";
        } else {
            x.style.backgroundColor = "grey";
            y.style.backgroundColor = "green";
        }
    }, 1000);
    </script>

</body>

</html>