<?php

//start the session

session_start();
if(isset($_SESSION['username']))
{      

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
        if(isset($_POST['register']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];
            $category = $_POST['category'];
            $portfolio = $_POST['portfolio_link'];
            $contact = $_POST['contact'];
            $email = $_POST['email_id'];
            
            $profileImageName = time()  .'_'. $_FILES['volunteer_image']['name'];
            $target = 'images/' . $profileImageName;


            if($password==$conf_password)
            {
                $email_verification = "SELECT email from volunteer WHERE email = '$email'";
                $result1 = mysqli_query($conn, $email_verification);
                $num = mysqli_num_rows($result1);
                
                if($num> 0)
                {
                    $status['status'] = "Email Already Exists";
                    $status_code['status_code'] = "error"; 
                }
                else
                {
                    if(move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target))
                    {
                        $query = "INSERT INTO volunteer (name, password, category, portfolio, contact, email, vol_image) VALUES ('$name','$password','$category','$portfolio','$contact','$email','$profileImageName')";
                    }

                    $result = mysqli_query($conn, $query);

                    if($result)
                    {
                        $status['status'] = "Success";
                        $status_code['status_code'] = "success";
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
else
{
    session_unset();
    session_destroy();
    header("Location: http://localhost/dbms_crud_website/log_out.php");
}



?>

