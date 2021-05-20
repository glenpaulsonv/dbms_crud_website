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
    if(isset($_POST['sign-up']))
    {
            $name = $_POST['name'];
            $email = $_POST['email_id'];
            $password = $_POST['password']; 
            $conf_password = $_POST['conf_password'];

            if($password==$conf_password)
            {
                $email_verification = "SELECT email from users WHERE email = '$email'";
                $result1 = mysqli_query($conn, $email_verification);
                $num = mysqli_num_rows($result1);
                
                if($num> 0)
                {
                    $_SESSION['status'] = "Email Already Exists";
                    $_SESSION['status_code'] = "error"; 
                }
                else
                {
                    $query = "INSERT INTO users (name, password, email) VALUES ('$name','$password','$email')";

                    $result = mysqli_query($conn, $query);

                    if($result)
                    {
                        $_SESSION['status'] = "Success";
                        $_SESSION['status_code'] = "success";
                    }
                    else
                    {
                        $_SESSION['status'] = "Try Again Later";
                        $_SESSION['status_code'] = "error";
       
                    }
                }
            }
            else
            {
                $_SESSION['status'] = "Passwords didn't match";
                $_SESSION['status_code'] = "error";
            }
    }
}
    ?>