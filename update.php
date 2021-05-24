<?php

session_start();
if(isset($_SESSION['username']))
{    
    
}
else
{
    
    session_unset();
    session_destroy();
    header("Location: http://localhost/dbms_crud_website/log_out.php");
}



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
        if(isset($_POST['update']))
        {
            $name = $_POST['name'];
            $email = $_POST['email_id'];
            $password = $_POST['old_password']; 
            $new_password = $_POST['new_password'];
            $new_category = $_POST['new_category'];
            $new_portfolio = $_POST['new_portfolio_link'];
            $new_contact = $_POST['new_contact'];           
             


            $email_verification = "SELECT email from volunteer WHERE email = '$email'";
            $result1 = mysqli_query($conn, $email_verification);
            $num = mysqli_num_rows($result1);
                
            if($num > 0)
            {

                $password_verification = "SELECT password from volunteer WHERE password = '$password' AND name = '$name'";
                $result2 = mysqli_query($conn, $password_verification);
                $num1 = mysqli_num_rows($result2);

                if($num1 > 0)
                {
                    $query = "UPDATE volunteer SET name='$name', password='$new_password', category='$new_category', portfolio='$new_portfolio', contact='$new_contact'  WHERE email='$email'";
                    $result3 = mysqli_query($conn, $query);  
                    
                    if($result3)
                    {
                        $status['status'] = "Details Updated";
                        $status_code['status_code'] = "success";
                    }
                    else
                    {
                        $status['status'] = "Try again";
                        $status_code['status_code'] = "error";  
                    }
                    
                }
                else
                {
                  
                    $status['status'] = "Incorrect Password";
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

    ?>