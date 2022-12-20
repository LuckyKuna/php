<?php 
    session_start();

    echo session_id();

    // $_SESSION['name']= 'NAZ';
    // $_SESSION['time']= date('H:i:s');

    //     echo '<pre>';
    // var_dump($_SESSION);
    //         echo '</pre>';
    //         echo '<hr>';

    //         unset($_SESSION['name']);
    //     echo '<pre>';
    // var_dump($_SESSION);
    //         echo '</pre>';
    //         echo '<hr>';

    // session_unset();        
    // echo '<pre>';
    // var_dump($_SESSION);
    //         echo '</pre>';
    //         echo '<hr>';

    define('ADMIN', 'admin');

    if(!empty($_POST['login'])){
        if ($_POST['login'] == ADMIN){
            $_SESSION['admin'] = ADMIN;
            $_SESSION['res'] = 'Ви авторизовані';
        }else{
            $_SESSION['res'] = 'Login incorrect';
        }
        header("Location:index16.php");
        die;
    }

    if(isset($_SESSION['res'])){
        echo $_SESSION['res'];
    }
?>
<form action="" method="POST" enctype="multipart/form-data">

    <div>
        <input type="text" name="login" placeholder="Введіть логін">
    </div>
    <div>
        <button type="reset"> Reset</button>
        <button type="submit" name="send" value="send"> Send</button>
    </div>
</form>
<?php
if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    echo 'Ви вийшли';
}
?>
<?php if( $_SESSION['admin'] == ADMIN){ ?>
<a href="index16.php?do=logout">Logout</a>
<?php } ?>