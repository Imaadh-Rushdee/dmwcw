<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmwcw241";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Connection Failed". mysqli_error($conn));
}
else{

    echo"Successfully Connected";
}
?>