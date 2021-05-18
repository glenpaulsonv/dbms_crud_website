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
            $num = mysqli_num_rows($result1);
                
            if($num > 0)
            {

                $password_verification = "SELECT password from volunteer WHERE password = '$password'";
                $result2 = mysqli_query($conn, $password_verification);
                $num1 = mysqli_num_rows($result2);

                if($num1 > 0)
                {
                    $query = "DELETE from volunteer WHERE password='$password'";
                    $result3 = mysqli_query($conn, $query);  
                    
                    if($result3)
                    {
                        $_SESSION['status'] = "User Deleted";
                        $_SESSION['status_code'] = "success";
                    }
                    else
                    {
                        $_SESSION['status'] = "Try again";
                        $_SESSION['status_code'] = "error";  
                    }
                    
                }
                else
                {
                  
                    $_SESSION['status'] = "Incorrect Password";
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