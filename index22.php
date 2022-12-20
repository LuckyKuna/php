<?php  
require_once './functions.php';

$contact = get_contact();
echo $contact;
echo '<pre>';
print_r($contact);
echo '</pre>';
echo '<hr>';   

$contacts = array_contacts($contact);
echo '<pre>';
print_r($contacts);
echo '</pre>';
echo '<hr>';   


if(!empty($_POST)){
    if(isset($_POST['send'])){
        save_contact();
    }
    if(isset($_POST['update'])){
        contact_update();
    }
    header("Location:{$_SERVER['PHP_SELF']}");
    exit;
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

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <input type="text" name="name" placeholder="Name" require>
        </div>
        <div>
            <input type="text" name="surname" placeholder="Surname" require>
        </div>
        <div>
            <input type="text" name="phonenumber" placeholder="Phone Number" require>
        </div>
        <div>
            <textarea name="comment" id="" placeholder="Comment"></textarea>
        </div>
        <div>
            <input type="submit" name="send" value="Send">
            <input type="submit" name="update" value="Update">
        </div>
    </form>

</body>

</html>