<?php
include 'Database.php'; // Ensure your database connection is correct
$place = 'default_dashboard.php'; // Fallback if no source provided

if (isset($_GET['place'])) {
    $place = $_GET['place']; // Get the source page
}
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

            echo "<script>
            alert('Photo was Not Uploaded');
            </script>";
            $image_path = "no image";
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
        echo "<script>
                alert('Record updated successfully.');
                window.location.href = 'selectstudent.php?type=$type &place=$place';
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
