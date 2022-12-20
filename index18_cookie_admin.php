<?php 

if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    setcookie('admin', 'ADMIN', time()-3600);
    echo 'Ви вийшли';
    header("Location:index22_admin.php");
}

if(!isset($_COOKIE['admin']))die('Ви не авторизовані');

echo 'Ми раді вас вітати - '.$_COOKIE['admin'];
?>

<ul>
    <li>
        <a href="./index21.php">index21.php</a>
        <a href="./index22_admin.php">index22_admin.php</a>
    </li>
</ul>

<?php if( $_COOKIE['admin'] == 'ADMIN'){ ?>
<a href="index22_admin.php?do=logout">Logout</a>
<?php } ?>