<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "volunteer_db"; 

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{

    
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

        
    if(move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target))
    {
        $query1 = "INSERT INTO volunteer (name, password, category, portfolio, contact, email, about, vol_image) VALUES ('$name','$password','$category','$portfolio','$contact','$email','$about','$profileImageName')";
    }

    $result = mysqli_query($conn, $query1);

    
    if($result){
        $_SESSION['status'] = "Success";
        $_SESSION['status_code'] = "success";
        header("Location: http://localhost/web_mini/Home.php");
    }
    else{
        $_SESSION['status'] = "Try Again Later";
        $_SESSION['status_code'] = "error";
       
    }

    }
    else{
    $_SESSION['status'] = "Incorrect Password";
    $_SESSION['status_code'] = "error";
    
    
    }


}

    
}






?>