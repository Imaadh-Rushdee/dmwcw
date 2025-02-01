<?php 

session_start();
include 'Database.php';
$name = "Hello World!";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from user WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);
        if($row['password'] === $password)
        {
            
            echo "Correct Password";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['role'] = $row['role'];
            if($_SESSION['role'] === 'Director')
            {
                echo "Hi DIrector";
                header('Location: director.html');
                exit();
            }
            else if($_SESSION['role'] === 'Principal')
            {
                echo "Hi Principal";
                header('Location: principal.html');
                exit();
            }
            else if($_SESSION['role'] === 'Student')
            {
                echo "Hi Student";
                header('Location: student.html');
                exit();
            }
            else if($_SESSION['role'] === 'Parent')
            {
                echo "Hi Parent";
                header('Location: parent.html');
                exit();
            }
            else if($_SESSION['role'] === 'Teacher')
            {
                echo "Hi Teacher";
                header('Location: teacher.html');
                exit();
            }
            else
            {
                echo "No Valid User";
            }
        }
        else
        {
            $t1 = "INVALID PASSWORD";
            header('Location: login.html');
            exit();
        }
    }
}

?>