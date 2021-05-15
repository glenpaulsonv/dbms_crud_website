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
        if(isset($_POST['register']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];
            $category = $_POST['category'];
            $portfolio = $_POST['portfolio_link'];
            $contact = $_POST['contact'];
            $email = $_POST['email_id'];
            $about = $_POST['about'];

            $profileImageName = time()  .'_'. $_FILES['volunteer_image']['name'];
            $target = 'images/' . $profileImageName;


            if($password==$conf_password)
            {
                $email_verification = "SELECT email from volunteer WHERE email = '$email'";
                $result1 = mysqli_query($conn, $email_verification);
                $num = mysqli_num_rows($result1);
                
                if($num> 0)
                {
                    $_SESSION['status'] = "Email Already Exists";
                    $_SESSION['status_code'] = "error"; 
                }
                else
                {
                    if(move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target))
                    {
                        $query = "INSERT INTO volunteer (name, password, category, portfolio, contact, email, about, vol_image) VALUES ('$name','$password','$category','$portfolio','$contact','$email','$about','$profileImageName')";
                    }

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


        }





    }   




?>

