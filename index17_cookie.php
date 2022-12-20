<?php 
    define('ADMIN', 'admin');

?>

<?php if( $_COOKIE['admin'] != ADMIN){ ?>
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
            setcookie('admin', 'ADMIN', time()+3600*24);
        }else{
            setcookie('admin', 'ADMIN', time()-3600);
        }
        header("Location:index21.php");
        die;
    }
?>

<?php if( $_COOKIE['admin'] == 'ADMIN'){ ?>
<ul>
    <li>
        <a href="./index21.php">index21.php</a>
        <a href="./index22_admin.php">index22_admin.php</a>
    </li>
</ul>
<?php } ?>

<?php
if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    setcookie('admin', 'ADMIN', time()-3600);
    header("Location:index21.php");
}
echo $_SERVER['QUERY_STRING'];
if(!isset($_COOKIE['admin']))die('Ви вийшли');
?>

<?php if( $_COOKIE['admin'] == 'ADMIN'){ ?>
<a href="index21.php?do=logout">Logout</a>
<?php } ?>