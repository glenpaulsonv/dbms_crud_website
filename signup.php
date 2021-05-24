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
                    $status['status'] = "Email Already Exists";
                    $status_code['status_code'] = "error"; 
                }
                else
                {
                    $query = "INSERT INTO users (name, password, email) VALUES ('$name','$password','$email')";

                    $result = mysqli_query($conn, $query);

                    if($result)
                    {
                    
                    $_SESSION['username'] = "$name";
                    header("Location: http://localhost/dbms_crud_website/index.php");
                    }
                    else
                    {
                        $status['status'] = "Try Again Later";
                        $status_code['status_code'] = "error";
       
                    }
                }
            }
            else
            {
                $status['status'] = "Passwords didn't match";
                $status_code['status_code'] = "error";
            }
    }
}


}

?>