<?php
include 'Database.php';

// Initialize type variable securely
$type = '';
if (isset($_GET['type'])) {
    $type = mysqli_real_escape_string($conn, $_GET['type']);
}

$sql = "SELECT * FROM user WHERE usertype = '$type'";
$result = mysqli_query($conn, $sql);
?>
<html>
    <head>
        <title>Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="viewuser.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <!-- CONTENT START -->
      <div class="mainbar container">
        <div class="card">
            <div class="my card-body">
                <blockquote class="named blockquote mb-0">
                    <div class="up">
                        <label id="cardname" name="heading"><?php echo htmlspecialchars($type); ?></label>
                        <div class="col-md-6" id="search">
                          <form class="myf d-flex" action="updateuser.php" method="GET">
                            <div class="input-group">
                                <input class="form-control form-control-lg" type="search" name="id" placeholder="Enter User ID to Search" aria-label="Search">
                                <button class="btn btn-primary px-4" type="submit">Update <i class="bi bi-search"></i></button>
                            </div>
                          </form>
                        </div>
                        <a href="user.php">
                          <button class="btn btn-primary" type="submit" style="height: 45px; width: 120px; padding-left: 10px;">New User</button>
                        </a>
                    </div>
                
                    <nav aria-label="breadcrumb" class="bc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="viewuser.php?type=Director">Directors</a></li>
                            <li class="breadcrumb-item"><a href="viewuser.php?type=Teacher">Teachers</a></li>
                            <li class="breadcrumb-item"><a href="viewuser.php?type=Student">Students</a></li>
                            <li class="breadcrumb-item"><a href="viewuser.php?type=Parent">Parents</a></li>
                            <li class="breadcrumb-item"><a href="viewuser.php?type=Principal">Principal</a></li>
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
                    <th scope="col">User Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['user_id']; ?></th>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['usertype']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td>
                      <a href="updateuser.php?id=<?php echo $row['user_id']; ?>" id="upd">Edit</a>
                      &nbsp;&nbsp;
                      <a href="deleteuser.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure you want to delete this user record?');" id="del">Delete</a>
                    </td>
                  </tr>
                  <?php 
                      }
                  } else {
                      echo "<tr><td colspan='7' class='text-center'>No records found for '".htmlspecialchars($type)."'</td></tr>";
                  }
                  ?>
                </tbody>
            </table>
        </div>
      </div>
          
      <!-- Footer Section -->
<div class="page-footer">

<footer class="pg1 bg-transparent text-center text-white fixed-bottom">
<!-- Grid container -->
 <div class="pg">
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
    </div>
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
