<?php

//start the session

session_start();
if(isset($_SESSION['username']))
{      
    $validate = True;

        if(isset($_POST['register']))
        {
            include 'connectdb2.php';

            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $conf_password = mysqli_real_escape_string($conn,$_POST['conf_password']);
            $category = mysqli_real_escape_string($conn,$_POST['category']);
            $portfolio = mysqli_real_escape_string($conn,$_POST['portfolio_link']);
            $contact = mysqli_real_escape_string($conn,$_POST['contact']);
            $email = mysqli_real_escape_string($conn,$_POST['email_id']);
            $f =$_FILES["volunteer_image"];

            if($name=='' OR $password=='' OR $conf_password=='' OR  $category=='' OR $portfolio=='' OR $contact=='' OR $email=='')
            {
                $status['status'] = "Enter all details";
                $status_code['status_code'] = "error";
                $validate = False;
            }

            if($password!='' and $conf_password!='' and $password!=$conf_password)   
            {
                $status['status'] = "Passwords didn't match";
                $status_code['status_code'] = "error";
                $validate = False;
            }

            if (empty($_FILES['volunteer_image']['name'])) {  /* Include this in the volunteer form */
                $status['status'] = "Upload your image";
                $status_code['status_code'] = "error";
                $validate = False;
            }
            else
            {
                $check = getimagesize($_FILES["volunteer_image"]["tmp_name"]);
                if(!$check)
                {
                    $status['status'] = "Invalid file type";
                    $status_code['status_code'] = "error";
                    $validate = False;
                }
                if ($_FILES["volunteer_image"]["size"] > 100000) {
                    $status['status'] = "File size exceeded";
                    $status_code['status_code'] = "error";
                    $validate = False;
                }
                    
            }


            if($validate)
            {

                $profileImageName = time()  .'_'. $_FILES['volunteer_image']['name'];
                $target = 'images/' . $profileImageName;


                $query = "SELECT password from volunteers where name =?";                
        
                $st = mysqli_prepare($conn,$query);
                mysqli_stmt_bind_param($st,'s',$name);
                mysqli_stmt_execute($st);
                $result = mysqli_stmt_get_result($st);
                

                if(mysqli_num_rows($result)>0)
                {
                    $status['status'] = "Volunteer already exists";
                    $status_code['status_code'] = "error"; 
                }


                else
                {
                    if(move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target))
                    {
                        $query2 = "INSERT INTO volunteers (name,password,category,portfolio,contact,email,vol_image) VALUES (?,?,?,?,?,?,?)";
                        $st3 = mysqli_prepare($conn,$query2);

                        $hpw = hash('sha512',$password);
            
                        mysqli_stmt_bind_param($st3,'sssssss',$name,$hpw,$category,$portfolio,$contact,$email,$profileImageName);
                        $result2 = mysqli_stmt_execute($st3);
                        if($result2)
                        {
                            $status['status'] = "Registered";
                            $status_code['status_code'] = "success";
                        }
                        else
                        {
                            $status['status'] = "Try again later";
                            $status_code['status_code'] = "error";
                        }

                    }
                    
            
                    

                }
            }

            
            

        }


}
else
{
    session_unset();
    session_destroy();
    header("Location:log_out.php");
}



?>

