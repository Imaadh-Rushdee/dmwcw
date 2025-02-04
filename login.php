<?php 
session_start();
include 'Database.php';

// Check for error parameter in the URL and display an error message if present
$errorMessage = isset($_GET['error']) && $_GET['error'] === 'invalid' 
    ? 'Invalid username or password. Please try again.' 
    : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['password'] === $password) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['role'] = $row['role'];

            switch ($_SESSION['role']) {
                case 'Director':
                    header('Location: director.php');
                    exit();
                case 'Principal':
                    header('Location: principal.html');
                    exit();
                case 'Student':
                    header('Location: student.html');
                    exit();
                case 'Parent':
                    header('Location: parent.html');
                    exit();
                case 'Teacher':
                    header('Location: teacher.html');
                    exit();
                default:
                    echo "No Valid User";
                    exit();
            }
        } else {
            // Redirect with error on incorrect password
            header('Location: login.php?error=invalid');
            exit();
        }
    } else {
        // Handle case when username does not exist
        header('Location: login.php?error=invalid');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="parent">
        <form action="login.php" id="loginform" method="POST">
            <div class="child">
                <h3 id="sign_in">Sign In</h3>

                <!-- Show error message if present -->
                <?php if (!empty($errorMessage)) : ?>
                    <p style="color: red;"><?php echo $errorMessage; ?></p>
                <?php endif; ?>

                <input type="text" id="username" name="username" placeholder="Username"><br><br>
                <input type="password" id="password" name="password" placeholder="Password"><br><br>
                <input type="submit" id="login" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
