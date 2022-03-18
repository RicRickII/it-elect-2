<?php
session_start();
$title='';
$date='';
$edit=false;
$id = 0;
$mysqli = new mysqli('localhost','rickdb','rickdatabase','rickdb') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $mysqli->query("INSERT INTO blog (title,date) VALUES ('title','date')") or die ($mysqli->error);

}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM blog WHERE id=$id") or die ($mysqli->error);
    $_SESSION['message'] = 'Record has been deleted';
    $_SESSION['msg_type'] = 'danger';
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit = true;
    $result = $mysqli->query("SELECT * FROM blog") or die ($mysqli->error);
        $row = $result->fetch_array();
        $song = $row['title'];
        $artist = $row['date'];
    

}



?>