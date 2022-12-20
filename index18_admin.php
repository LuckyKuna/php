<?php 

session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    echo 'Ви вийшли';
}

if(!isset($_SESSION['admin']))die('Ви не авторизовані');

echo 'Ми раді вас вітати - '.$_SESSION['admin'];
?>

<ul>
    <li>
        <a href="index17.php">index17.php</a>
        <a href="index18_admin.php">index18_admin.php</a>
    </li>
</ul>

<?php if( $_SESSION['admin'] == 'admin'){ ?>
<a href="index18_admin.php?do=logout">Logout</a>
<?php } ?>