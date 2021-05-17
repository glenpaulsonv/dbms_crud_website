<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "vol_database"; 

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn)
    {
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }

else
    {
        if(isset($_POST['delete']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];            
            $email = $_POST['email_id']; 




            $email_verification = "SELECT email from volunteer WHERE email = '$email'";
            $result1 = mysqli_query($conn, $email_verification);
            
                
            if($result1)
            {
                $query = "DELETE from volunteer WHERE name='$name'";
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

            else
                {
                    $_SESSION['status'] = "Verify your email id";
                    $_SESSION['status_code'] = "error";
                }
            
            
                


        }
    }




?>