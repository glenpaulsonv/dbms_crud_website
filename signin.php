<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user_database"; 

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn)
    {
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }

else
{
    if(isset($_POST['sign-in']))
    {
            $name = $_POST['name'];            
            $password = $_POST['password'];
            $email = $_POST['email_id'];             

            $email_verification = "SELECT email from users WHERE email = '$email'";
            $result1 = mysqli_query($conn, $email_verification);
            $num = mysqli_num_rows($result1);
                
            if($num > 0)
            {
                $password_verification = "SELECT password from users WHERE password = '$password' AND name = '$name'";
                $result2 = mysqli_query($conn, $password_verification);
                $num1 = mysqli_num_rows($result2);

                if($num1 > 0)
                {
                    header("Location: http://localhost/dbms_crud_website/index.php");
                }
                else
                {
                    $_SESSION['status'] = "Verify your credentials";
                    $_SESSION['status_code'] = "error";
                }
            }
            else
            {
                $_SESSION['status'] = "Verify your email id";
                $_SESSION['status_code'] = "error";
            }
    }
}
    ?>