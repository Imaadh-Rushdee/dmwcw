<?php 

include 'Database.php';
$place = 'default_dashboard.php'; // Fallback if no source provided

if (isset($_GET['place'])) {
    $place = $_GET['place']; // Get the source page
}
$firstName = $_POST['fn'];
$lastName = $_POST['ln'];

$adress = $_POST['ad'];
$username = $_POST['mn'];
$email = $_POST['em'];
$contact = $_POST['mc'];
$password = $_POST['ps'];
$type = $_POST['gn'];

    $upload_dir = "uploads/";
    $product_image = $_FILES['customFile2'];
    $image_name = basename($product_image["name"]);
    $image_path = $upload_dir . $image_name;


    if (move_uploaded_file($product_image["tmp_name"], $image_path))
    {
        

    }
    else{
        echo "<script>
alert('Photo was Not Uploaded');
</script>";
$image_path = "no image";
        
    }



    $sql = "INSERT INTO user(firstname,lastname,adress,email,contact,usertype,username,password,userphoto) 
    VALUES('$firstName','$lastName','$adress','$email','$contact','$type','$username','$password','$image_path')";


$result = mysqli_query($conn, $sql);

if($result == true)
{
echo "<script>
        alert('Record Added successfully.');
        window.location.href = 'viewuser.php?type=$type &place=$place';
      </script>";
}
else
{
echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>