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

    // Query to get user details
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Simple password comparison (plaintext)
        if ($row['password'] === $password) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['usertype'] = strtolower($row['usertype']);

            // Redirect based on user type
            switch ($_SESSION['usertype']) {
                case 'director':
                    header('Location: director.php');
                    exit();
                case 'principal':
                    header('Location: principal.php');
                    exit();
                case 'student':
                    header('Location: student.php');
                    exit();
                case 'parent':
                    header('Location: parent.php');
                    exit();
                case 'teacher':
                    header('Location: teacher.php');
                    exit();
                default:
                    echo "No Valid User";
                    exit();
            }
        } else {
            header('Location: login.php?error=invalid');
            exit();
        }
    } else {
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

                <input type="text" id="username" name="username" placeholder="Username" required><br><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br><br>
                <input type="submit" id="login" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
