<?php 
    session_start();

    define('ADMIN', 'admin');

    if(!empty($_POST['login'])){
        if ($_POST['login'] == ADMIN){
            $_SESSION['admin'] = ADMIN;
            $_SESSION['res'] = 'Ви авторизовані';
        }else{
            $_SESSION['res'] = 'Login incorrect';
        }
        header("Location:index17.php");
        die;
    }
?>

<?php if( $_SESSION['admin'] != ADMIN){ ?>
<form action="" method="POST" enctype="multipart/form-data">
    <div>
        <input type="text" name="login" placeholder="Введіть логін">
    </div>
    <div>
        <button type="reset"> Reset</button>
        <button type="submit" name="send" value="send"> Send</button>
    </div>
</form>
<?php } ?>

<?php 
    if(!empty($_POST['login'])){
        if ($_POST['login'] == ADMIN){
            $_SESSION['admin'] = ADMIN;
            $_SESSION['res'] = 'Ви авторизовані';
        }else{
            $_SESSION['res'] = 'Login incorrect';
        }
        header("Location:index17.php");
        die;
    }
?>

<?php if( $_SESSION['admin'] == ADMIN){ ?>
<ul>
    <li>
        <a href="./index17.php">index17.php</a>
        <a href="./index18_admin.php">index18_admin.php</a>
    </li>
</ul>
<?php } ?>

<?php
if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    echo '<br>';
    echo 'Ви вийшли';
}
?>
<?php if( $_SESSION['admin'] == ADMIN){ ?>
<a href="index17.php?do=logout">Logout</a>
<?php } ?>