<?php
include 'Database.php'; // Ensure your database connection is correct
$place = 'default_dashboard.php'; // Fallback if no source provided

if (isset($_GET['place'])) {
    $place = $_GET['place']; // Get the source page
}
$userid = $_GET['id'];

if (isset($_POST['update'])) {

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
    $image_path = $_POST['existingImagePath']; 

    // Handle new file upload if available
    if (!empty($product_image['name'])) {
        $image_name = basename($product_image["name"]);
        $image_path = $upload_dir . $image_name;

        // Attempt to move the uploaded file
        if (!move_uploaded_file($product_image["tmp_name"], $image_path)) {
            
        echo "<script>
        alert('Photo was Not Uploaded');
        </script>";
        $image_path = "no image";

        }
    }

    // Update query
    $sqlUpdate = "UPDATE user SET 
        lastname = '$lastName',
        firstname = '$firstName',
        adress = '$adress',
        username = '$username',
        email = '$email',
        contact = '$contact',
        password = '$password',
        usertype = '$type',
        userphoto = '$image_path'
        WHERE user_id = '$userid'";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "<script>
                alert('Record updated successfully.');
                window.location.href = 'viewuser.php?type=$type &place=$place';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
                window.history.back();
              </script>";
    }
}
?>
