<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "vol_database"; 

$conn = mysqli_connect($servername, $username, $password, $database);



if(isset($_POST['register']))
{
    echo "<pre>", print_r($_FILES['volunteer_image']['name']), "</pre>";

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


            if(move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target))
            {
         
                $sql = "INSERT INTO volunteer (name, password, category, portfolio, contact, email, about, vol_image) VALUES ('$name','$password','$category','$portfolio','$contact','$email','$about','$profileImageName')";
             
                if(mysqli_query($conn,$sql))
                {                 
                    echo "Image Uploaded and saved to the database";
             
                }
                else
                {
                    echo"Failed to save the user";
                
                }
         
            }

}

?>