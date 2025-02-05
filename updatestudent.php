<?php

include 'Database.php';

$addNO = $_GET['id'];

$sql = "SELECT * FROM student where addNO = $addNO";
$result = mysqli_query($conn,$sql);

$place = 'default_dashboard.php'; // Fallback if no source provided

if (isset($_GET['place'])) {
    $place = $_GET['place']; // Get the source page
}
            

if(mysqli_num_rows($result)> 0){
  $row = mysqli_fetch_assoc($result);
    $admission = $row['addNo'];
?>

<html>
    <head>
        <title>Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="updatestudent.css">
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
          <a class="navbar-brand" href="#">Navbar</a>
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
      <form name="update" action="updatestudent2.php?id=<?php echo $row['addNo']; ?>&place=<?php echo $place; ?>" method="post" enctype="multipart/form-data" onsubmit="return doValidation()">
        <div class="studentdata">
          <div class="main-data">
            <div class="box">

            <div class="imagegroup">
              <div class="d-flex justify-content-center mb-2">
                  <img id="selectedAvatar" src="<?php echo htmlspecialchars($row['studentphoto']);?>"
                  class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;" alt="example placeholder" />
              </div>

              <div class="d-flex justify-content-center">
                  <div data-mdb-ripple-init class="btn btn-primary btn-rounded btn-sm"><!-- Hidden input to store the existing image path -->
                        <input type="hidden" name="existingImagePath" value="<?php echo htmlspecialchars($row['studentphoto']); ?>">
                        <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                        <input type="file" class="form-control d-none" id="customFile2" name="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />

                </div>
              </div>
          </div>

            </div>
            <label id="addmi">Addmission No.</label><input type="text" id="adminno" name="an" class="stddata"  value="<?php echo $row['addNo'];?>">
            <label id="gender">Gender</label>
            <select name="gn" id="genderse">
                <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                 <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            </select>



            <label id="firstname">First Name</label><input type="text" id="fname" name="fn" class="stddata" value="<?php echo $row['firstname'];?>">
            <label id="lastname">Last Name</label><input type="text" id="lname" name="ln" class="stddata" value="<?php echo $row['lastname'];?>">
            <label id="age">Age</label><input type="number" id="iage" name="ag" class="stddata" value="<?php echo $row['age'];?>">
            <label id="dateofbirth">Date Of Birth</label><input type="date" id="dob" name="db" class="stddata" value="<?php echo $row['dob'];?>">
            <label id="dateofadmission">Date Of Addmission</label><input type="date" id="doa" name="da" class="stddata" value="<?php echo $row['doa'];?>">




            <label id="currentgrade">Current Grade</label>

            <select name="cg" id="grade" class="stddata" style="padding-top: 0; padding-right: 0; padding-left: 10px; padding-bottom: 0; height: 40px;">
            <option value="pregrade" <?php if ($row['currentgrade'] == 'pregrade') echo 'selected'; ?>>Pre Grade</option>
            <option value="1" <?php if ($row['currentgrade'] == 'grade01') echo 'selected'; ?>>Grade 01</option>
            <option value="2" <?php if ($row['currentgrade'] == 'grade02') echo 'selected'; ?>>Grade 02</option>
            <option value="3" <?php if ($row['currentgrade'] == 'grade03') echo 'selected'; ?>>Grade 03</option>
            <option value="4" <?php if ($row['currentgrade'] == 'grade04') echo 'selected'; ?>>Grade 04</option>
            <option value="5" <?php if ($row['currentgrade'] == 'grade05') echo 'selected'; ?>>Grade 05</option>
            <option value="6" <?php if ($row['currentgrade'] == 'grade06') echo 'selected'; ?>>Grade 06</option>
            <option value="7" <?php if ($row['currentgrade'] == 'grade07') echo 'selected'; ?>>Grade 07</option>
            <option value="8" <?php if ($row['currentgrade'] == 'grade08') echo 'selected'; ?>>Grade 08</option>
            <option value="9" <?php if ($row['currentgrade'] == 'grade09') echo 'selected'; ?>>Grade 09</option>
            <option value="10" <?php if ($row['currentgrade'] == 'grade10') echo 'selected'; ?>>Grade 10</option>
            <option value="11" <?php if ($row['currentgrade'] == 'grade11') echo 'selected'; ?>>Grade 11</option>
          </select>



            <label id="adress">Adress</label><input type="text" id="add" name="ad" class="stddata" value="<?php echo $row['adress'];?>">
            <label id="mothersname">Mothers Name</label><input type="text" id="mname" name="mn" class="stddata" value="<?php echo $row['mname'];?>">
            <label id="mothercontact">Mothers Contact No.</label><input type="number" id="mcno" name="mc" class="stddata" value="<?php echo $row['mcontact'];?>">
            <label id="fathersname">Fathers Name</label><input type="text" id="ftname" name="fgn" class="stddata" value="<?php echo $row['fname'];?>">
            <label id="fathercontact">Fathers Contact No.</label><input type="number" id="ftcno" name="fc" class="stddata" value="<?php echo $row['fgcontact'];?>">
            

            <div class="bnt">
              <a href=""><input type="submit" id="noupdate" name="Cancel" value="Cancel"></a>
              <a href="updatestudent2.php?id=<?php echo $row['addNo']; ?>"><input type="submit" id="update" name="update" value="Update" onclick="doValiadation()"></a>
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