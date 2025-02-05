<?php
include 'Database.php';
$grade = 0;
if (isset($_GET['grade'])) {
  $grade = (int) $_GET['grade']; // Cast to integer to ensure security
}
$sql = "SELECT * FROM student where currentgrade = $grade";
$result = mysqli_query($conn,$sql);

?>
<html>
    <head>
        <title>Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="selectstudent.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    
      <script type="text/Javascript">

        function setText(grade)
        {
          let cardTopic = document.getElementById("cardname");
          cardTopic.innerHTML = grade;
        }
  


function confirmDelete() {
    return confirm("Are you sure you want to delete this student record?");
}
</script>



    
    </head>
    <body>

      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </div>
      </nav>
        
      <!--CONTENT SHOULD START FROM HERE-->

        <div class="mainbar container">
          
        <div class="card">
            <div class="my card-body">
                <blockquote class="named blockquote mb-0">
                <div class="up">
                        <label id="cardname" name="heading">Grade <?php echo $grade;?></label>
                        <div class="col-md-6" id="search">
                          <form class="myf d-flex" action="updatestudent.php" method="GET">
                            <div class="input-group">
                           <input 
                               class="form-control form-control-lg" 
                                type="search" 
                                 name="id" 
                                  placeholder="Enter Admission ID to Search" 
                                   aria-label="Search" 
                                     id="bnt">
                                <button class="btn btn-primary px-4" type="submit">
                                  Update
                                        <i class="bi bi-search"></i>
                              </button>
                              </div>
                            </form>

                        </div>
                        <a href="applyadmission.php">
                          <button class="btn btn-primary" type="submit" style="height: 45px; width: 120px; color: white;">
                            New Student
                          </button>
                        </a>
                    </div>
                
<nav aria-label="breadcrumb" class="bc">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=pregrade">Pre Grade</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=1">Grade 01</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=2">Grade 02</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=3">Grade 03</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=4">Grade 04</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=5">Grade 05</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=6">Grade 06</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=7">Grade 07</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=8">Grade 08</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=9">Grade 09</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=10">Grade 10</a></li>
        <li class="breadcrumb-item"><a href="selectstudent.php?grade=11">Grade 11</a></li>

    </ol>
</nav>
              </blockquote>
            </div>
          </div>
      </div>

      <div class="main container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Admission No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
              if(mysqli_num_rows($result)> 0){
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['addNo'];?></th>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['currentgrade'];?></td>
                    <td><a href="updatestudent.php?id=<?php echo $row['addNo']; ?>" id="upd">Update</a> &nbsp; &nbsp;<a href="deletestudent.php?id=<?php echo $row['addNo']; ?>" onclick="return confirmDelete();" id="del">Delete</a></td>
                  </tr>
                  <?php 
                      }
                  } else {
                      echo "<tr><td colspan='7' class='text-center'>No records found for grade '".htmlspecialchars($grade)."'</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          
      <!--CONTENT SHOULD END HERE-->

<div class="page-footer">

  <footer class="pg bg-transparent text-center text-white fixed-bottom">
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