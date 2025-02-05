<?php

include 'Database.php';

$userid = $_GET['id'];

$sql = "SELECT * FROM user where user_id = $userid";
$result = mysqli_query($conn,$sql);

$place = 'default_dashboard.php'; // Fallback if no source provided

if (isset($_GET['place'])) {
    $place = $_GET['place']; // Get the source page
}
            

if(mysqli_num_rows($result)> 0){
  $row = mysqli_fetch_assoc($result);
?>

<html>
    <head>
        <title>Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="user.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="update.js"></script>
    </head>
    <body>
 
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo $place; ?>">Dashboard</a>
              </li>
          </div>
        </div>
      </div>
    </nav>
    




    <!--CONTENT SHOULD START FROM HERE-->
    <form name="newuser"action="updateuser2.php?id=<?php echo $row['user_id']; ?>&place=<?php echo $place; ?>" method="POST" enctype="multipart/form-data" onsubmit="return doValidation()">
      <div class="studentdata">
        <div class="main-data">
            <div class="tpc"><h2 id="topic">CREATE NEW USER</h2></div>
            <div class="box">

            <div class="imagegroup">
              <div class="d-flex justify-content-center mb-2">
                  <img id="selectedAvatar" src="<?php echo htmlspecialchars($row['userphoto']);?>"
                  class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;" alt="example placeholder" />
              </div>

              <div class="d-flex justify-content-center">
                  <div data-mdb-ripple-init class="btn btn-primary btn-rounded btn-sm"><!-- Hidden input to store the existing image path -->
                        <input type="hidden" name="existingImagePath" value="<?php echo htmlspecialchars($row['userphoto']); ?>">
                        <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                        <input type="file" class="form-control d-none" id="customFile2" name="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />

                </div>
              </div>
          </div>

            </div>
          <label id="firstname">First Name</label><input type="text" id="fname" name="fn" class="stddata" value="<?php echo $row['firstname'];?>"required>
          <label id="lastname">Last Name</label><input type="text" id="lname" name="ln" class="stddata" value="<?php echo $row['lastname'];?>" required>
          <label id="age">Email</label><input type="text" id="iage" name="em" class="stddata" value="<?php echo $row['email'];?>" required>
          <label id="dateofbirth">User Type</label>
          <select name="gn" id="type" class="">
            <option value="Director"  <?php if ($row['usertype'] == 'director') echo 'selected'; ?>>Director</option>
            <option value="Teacher"  <?php if ($row['usertype'] == 'teacher') echo 'selected'; ?>>Teacher</option>
            <option value="Student"  <?php if ($row['usertype'] == 'student') echo 'selected'; ?>>Student</option>
            <option value="Principal"  <?php if ($row['usertype'] == 'principal') echo 'selected'; ?>>Principal</option>
            <option value="parent"  <?php if ($row['usertype'] == 'parent') echo 'selected'; ?>>Parent</option>
          </select>
          <label id="adress">Adress</label><input type="text" id="add" name="ad" class="stddata" value="<?php echo $row['adress'];?>" required>
          <label id="mothersname">Username</label><input type="text" id="mname" name="mn" class="stddata" value="<?php echo $row['username'];?>" required>
          <label id="mothercontact">Contact No.</label><input type="number" id="mcno" name="mc" class="stddata" value="<?php echo $row['contact'];?>"  required>
          <label id="fathersname">Password</label><input type="text" id="ftname" name="ps" class="stddata" value="<?php echo $row['password'];?>" required>
          

          <div class="bnt">
              <a href=""><input type="submit" id="noupdate" name="Cancel" value="Cancel"></a>
              <a href="updateuser2.php?id=<?php echo $row['user_id']; ?>"><input type="submit" id="update" name="update" value="Update" onclick="doValiadation()"></a>
            </div>
        </div>
      </div>
        <?php
              }
            ?>
      </form>
        

      <!--CONTENT SHOULD END HERE-->

<div class="page-footer">

  <footer class="pg bg-transparent text-center text-white sticky">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
      <!-- Facebook -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #3b5998; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook"  style="color: aliceblue;"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #55acee; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"  style="color: aliceblue;"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #dd4b39; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-google" style="color: aliceblue;"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #ac2bac; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"  style="color: aliceblue;"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #0082ca; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"  style="color: aliceblue;"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-outline btn-floating m-1"
        style="background-color: #333333; border-radius: 50px; width: 30pt; height: 30pt; align-content: center;"
        href="#!"
        role="button"
        ><i class="fab fa-github"  style="color: aliceblue;"></i
      ></a>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="fotcol text-center p-3" style="background-color: rgba(24, 18, 85, 0.904);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>

    </body>
    </html>