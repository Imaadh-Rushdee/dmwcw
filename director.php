<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>


<html>
    <head>
        <title>Director Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="director.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body><nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Reports</a></li>
                  <li><a class="dropdown-item" href="#">Departments</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login.php">Log Out</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br><br>
      
      <div class="rec">
        <div class="rec3 card">
          <div class="card-body" id="rec2">
                <label for="" class="mybnt"> Quick Access</label>
              <button type="button" class="mybnt">Home</button>
              <button type="button" class="mybnt">Photos</button>
              <a href="applyadmission.php?place=director.php"><button type="button" class="mybnt">Student Addmission</button></a>
              <a href="user.php?place=director.php"><button type="button" class="mybnt">Add User</button></a>
              <button type="button" class="mybnt">Parents</button>
              <button type="button" class="mybnt">Messages</button>
            </blockquote>
          </div>
        </div>
      </div>
      <br><br>
      <!--CONTENT SHOULD START FROM HERE-->
      
   
      
      <div class="container">

          <div class="card">
            <div class="card-body">
              <blockquote class="named blockquote mb-0">
                <label>Home</label>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>
                </nav>
              </blockquote>
            </div>
          </div>
          <br><br>
          <h3>Hello <?php echo htmlspecialchars($username); ?>!</h3>
          <br><br>
          
          <div class="card-group">
            <div class="cardgroup">
              <div class="cards">
                <div class="card">
                  <img src="back2.jpg" class="sub card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">My Files</h5>
                  </div>
                </div>
              </div>
              <div class="cards">
                <div class="card">
                  <a href="selectstudent.php?place=director.php">
                  <img src="back2.jpg" class="sub card-img-top" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">Students</h5>
                  </div>
                </div>
              </div>
              <div class="cards">
                <div class="card">
                  <a href="viewuser.php?place=director.php">
                  <img src="back2.jpg" class="sub card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">All Users</h5>
                  </div>
                </div>
              </div>
              
              <div class="cards">
                <div class="card">
                  <img src="back2.jpg" class="sub card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Income and Expenses</h5>
                  </div>
                </div>
              </div>
              
              <div class="cards">
                <div class="card">
                  <img src="back2.jpg" class="sub card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Financial Reports</h5>
                  </div>
                </div>
              </div>
              
              <div class="cards">
                <div class="card">
                  <img src="back2.jpg" class="sub card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Attendance</h5>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

            
      
      <!--CONTENT SHOULD END HERE-->

<div class="page-footer">

  <footer class="pg bg-light text-center text-white">
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