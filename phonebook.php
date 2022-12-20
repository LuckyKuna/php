<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "up";

$name =  $_POST['name'];
$surname = $_POST['surname'];
$spec =  $_POST['spec'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$date = date('Y-m-d H:i:s');

$sql_ins = "INSERT INTO `phonebook`  (`name`, `surname`, `spec`, `phone`, `comment`, `date`)
        VALUES ('$name',
                '$surname',  
                '$spec',
                '$phone',
                '$comment',
                '$date')";
$sql_upd = "UPDATE `phonebook` SET `spec` = '$spec', `phone` = '$phone', `comment` = '$comment' WHERE `name` = '$name', `surname` = '$surname'";
$form_sql_get = "SELECT * FROM `phonebook` WHERE `name` = '$name'";
$conn = new mysqli($servername, $username, $password, $dbname);


// $row = $result_get->fetch_assoc();

// $get = "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";

// $result = mysqli_query($conn, "SELECT * FROM `phonebook` WHERE `name`= 'Max'");
// $row = mysqli_fetch_assoc($result);
// echo $row['phone'];


if(!empty($_POST)){
    // unset($success);
    // $success = "Information sent successful";
    if(isset($_POST['send'])){
        (mysqli_query($conn, $sql_ins) ? $success = "Information sent successful" : $success = "Information Sending Failed");
        // mysqli_query($conn, $sql_ins);
        $result_get = mysqli_query($conn, $form_sql_get);
        $row = mysqli_fetch_assoc($result_get);
    }
    if(isset($_POST['update'])){
        (mysqli_query($conn, $sql_upd) ? $success = "Information sent successful" : $success = "Information Sending Failed");
        // mysqli_query($conn, $sql_upd);
    }
    // header("Location:{$_SERVER['PHP_SELF']}");
    // exit;
}

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
    <?php    if (isset($success)){ echo "<div>" . $success . "</div>";} ?>
    <?php    print_r($row) ; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="text" name="surname" placeholder="Surname" required>
        </div>
        <div>
            <input type="text" name="spec" placeholder="Specialization" required>
        </div>
        <div>
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div>
            <textarea name="comment" id="" placeholder="Comment"></textarea>
        </div>
        <div>
            <input type="submit" name="send" value="Send">
            <input type="submit" name="update" value="Update">
        </div>
    </form>

    <?php 
    mysqli_close($conn);
    ?>
</body>

</html>