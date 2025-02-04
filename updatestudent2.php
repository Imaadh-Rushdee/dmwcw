<?php
include 'Database.php'; // Ensure your database connection is correct
$addNO = $_GET['id'];

if (isset($_POST['update'])) {
    $firstName = $_POST['fn'];
    $lastName = $_POST['ln'];
    $address = $_POST['ad'];
    $gender = $_POST['gn'];
    $age = $_POST['ag'];
    $dob = $_POST['db'];
    $doa = $_POST['da'];
    $mname = $_POST['mn'];
    $fname = $_POST['fgn'];
    $mcontact = $_POST['mc'];
    $fgcontact = $_POST['fc'];
    $currentGrade = $_POST['cg'];
    $addNo = $_POST['an'];

    $upload_dir = "uploads/";
    $product_image = $_FILES['customFile2'];
    $image_path = $_POST['existingImagePath']; // Default to existing image path

    // Handle new file upload if available
    if (!empty($product_image['name'])) {
        $image_name = basename($product_image["name"]);
        $image_path = $upload_dir . $image_name;

        // Attempt to move the uploaded file
        if (!move_uploaded_file($product_image["tmp_name"], $image_path)) {
            die("File upload failed.");
        }
    }

    // Update query
    $sqlUpdate = "UPDATE student SET 
        lastname = '$lastName',
        firstname = '$firstName',
        adress = '$address',
        age = '$age',
        gender = '$gender',
        dob = '$dob',
        doa = '$doa',
        mname = '$mname',
        fname = '$fname',
        mcontact = '$mcontact',
        fgcontact = '$fgcontact',
        studentphoto = '$image_path',
        currentgrade = '$currentGrade',
        imagename = '$image_name'
        WHERE addNo = '$addNo'";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "Record updated successfully.";
        echo '<script>window.history.go(-2);</script>';
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
