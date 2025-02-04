<?php 

include 'Database.php';

$firstName = $_POST['fn'];
$lastName = $_POST['ln'];
$adress = $_POST['ad'];
$gender = $_POST['gn'];
$age = $_POST['ag'];
$dob = $_POST['db'];
$doa = $_POST['da'];
$mname = $_POST['mn'];
$fname = $_POST['fgn'];
$mcontact = $_POST['mc'];
$fgcontact = $_POST['fc'];
$currentGrade = $_POST['cg'];

    $upload_dir = "uploads/";
    $product_image = $_FILES['customFile2'];
    $image_name = basename($product_image["name"]);
    $image_path = $upload_dir . $image_name;

    if (move_uploaded_file($product_image["tmp_name"], $image_path))
    {

$sql = "INSERT INTO student(firstname,lastname,adress,gender,age,dob,doa,mname,fname,mcontact,fgcontact,currentgrade,studentphoto,imagename) 
        VALUES('$firstName','$lastName','$adress','$gender','$age','$dob','$doa','$mname','$fname','$mcontact','$fgcontact','$currentGrade','$image_path','$image_name')";


$result = mysqli_query($conn, $sql);

if($result == true)
{
    echo "New Record Inserted";
}
else
{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
    }

    else {
        echo "Failed to upload the image.";
    }
?>