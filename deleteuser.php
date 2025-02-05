<?php
include 'Database.php';

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = $userid";
$result = mysqli_query($conn,$sql);

if($result == true){
    echo "Record deleted!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();

}
?>