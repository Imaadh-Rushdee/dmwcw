<?php
include 'Database.php';

$addNO = $_GET['id'];

$sql = "DELETE FROM student WHERE addNo = $addNO";
$result = mysqli_query($conn,$sql);

if($result == true){
    echo "Record deleted!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();

}
?>