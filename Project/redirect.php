<?php 
session_start();
if($_POST['captcha'] != $_SESSION['digit']){
    header('location: login-error.php');
    die("The entered CAPTCHA was incorrect");
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<body>
<?php
include ("db_connection.php");

$uid=($_POST['userid']);
$pwd=($_POST['password']);

$sql="SELECT * FROM user_table where user_id='$uid' AND password='$pwd'";
$result=$connect->query($sql);

if (!$result) {
    die('Error executing query: ' . $connect->error);
} elseif ($result->num_rows == 0) {
    die('Invalid login credentials');
} else {
    $row = $result->fetch_assoc();
    $_SESSION['id']=$uid;
    $_SESSION['pwd']=$pwd;
    header('location: /Project/menu.php');
}
?>
</html>