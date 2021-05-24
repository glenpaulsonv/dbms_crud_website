<?php

session_start();
if(isset($_SESSION['username']))
{    
    header("Location: http://localhost/dbms_crud_website/home.php");
}
else
{    

    $validate = True;

    if(isset($_POST['sign-in']))
    {
        include 'connectdb1.php';
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $email = mysqli_real_escape_string($conn,$_POST['email_id']);
        
        if($name=='' OR $password=='' OR $email=='')
        {
        $status['status'] = "Enter all details";
        $status_code['status_code'] = "error";
        $validate = False;
        }

        if($validate)
        {
            $query = "SELECT password from users where name =?";

            $st = mysqli_prepare($conn,$query);        
            mysqli_stmt_bind_param($st,'s',$name);   
            mysqli_stmt_execute($st);              
            $result = mysqli_stmt_get_result($st); 
    
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result))
            {
                $hpw=hash('sha512',$password);

                if($row['password'] == $hpw)
                {
                    $_SESSION['username'] = $name;
                    header('Location:home.php');
                }
                else
                {
                    $status['status'] = "Invalid Password";
                    $status_code['status_code'] = "error";                
                }
            }
            else
            {
                $status['status'] = "Not a registered user";
                $status_code['status_code'] = "error";  
            }
        }

        
    }

    

  
}

?>