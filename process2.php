<?php
session_start();
$mysqli = new mysqli('localhost','rick','rickdatabase','crud') or die(mysqli_errror($mysqli));


if(isset($_POST['register'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    $mysqli->query("INSERT INTO data (username,password) VALUES ('$user','$password')") or die ($mysqli->error);
    $_SESSION['message'] = 'Record has been saved';
    $_SESSION['msg_type'] = 'success';

    header('location:index.php');
}

if(isset($_GET['login'])){
    $
    $user = $_GET['user'];
    $password = $_GET['password'];
    $result =  $mysqli->query("SELECT * FROM data");
    if(count($result) > 0){
        $result->fetch_array();
    }
    header('location:index.php');
}

?>