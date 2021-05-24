<?php

session_start();
if(isset($_SESSION['username']))
{    
    header("Location: http://localhost/dbms_crud_website/home.php");
}
else
{    



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
                    
                    $_SESSION['username'] = "$name";
                    header("Location: http://localhost/dbms_crud_website/home.php");
                }
                else
                {
                    $status['status'] = "Verify your credentials";
                    $status_code['status_code'] = "error";
                }
            }
            else
            {
                $status['status'] = "Verify your email id";
                $status_code['status_code'] = "error";
            }
    }
}
  
}

?>