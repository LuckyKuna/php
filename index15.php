    <?php 
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';
            echo '<hr>';

            echo 'PHP_SELF - '.$_SERVER['PHP_SELF'];
            echo '<br>';
            echo 'SERVER_NAME - '.$_SERVER['SERVER_NAME'];
            echo '<br>';
            echo 'QUERY_STRING - '.$_SERVER['QUERY_STRING'];
            echo '<br>';
            echo 'DOCUMENT_ROOT - '.$_SERVER['DOCUMENT_ROOT'];
            echo '<br>';
            echo 'HTTP_HOST - '.$_SERVER['HTTP_HOST'];
            echo '<br>';
            echo 'HTTP_REFERER - '.$_SERVER['HTTP_REFERER'];
            echo '<br>';
            echo 'REMOTE_ADDR - '.$_SERVER['REMOTE_ADDR'];
            echo '<br>';
    ?>


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
        if(!empty($_POST['send'])){
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            echo '<hr>';
        } 
        if(!empty($_FILES)){
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            echo '<hr>';
            // move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
            
            $total = count($_FILES['file']['name']);

            for ($i=0; $i< $total; $i++){
                move_uploaded_file($_FILES['file']['tmp_name'][$i], 'upload/'.$_FILES['file']['name'][$i]);
            }
        } 


    echo '<hr>';
    echo '<br>';
    ?>

        <!-- <form action="" method="POST" enctype="multipart/form-data">

        <div>
            <input type="text" name="name" placeholder="Введіть Ім'я">
        </div>
        <div>
            <textarea name="text" id="" cols="30" rows="10" placeholder="Введіть текст"></textarea>
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <button type="reset"> Reset</button>
            <button type="submit" name="send" value="send"> Send</button>
        </div>


    </form> -->
        <form action="" method="POST" enctype="multipart/form-data">

            <div>
                <input type="text" name="name" placeholder="Введіть Ім'я">
            </div>
            <div>
                <textarea name="text" id="" cols="30" rows="10" placeholder="Введіть текст"></textarea>
            </div>
            <div>
                <input type="file" name="file[]" multiple>
            </div>
            <div>
                <button type="reset"> Reset</button>
                <button type="submit" name="send" value="send"> Send</button>
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






    </body>

    </html>