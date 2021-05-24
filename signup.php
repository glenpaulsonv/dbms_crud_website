<?php

session_start();
if(isset($_SESSION['username']))
{    
    header("Location: http://localhost/dbms_crud_website/home.php");
}
else
{

    $validate = True;

    if(isset($_POST['sign-up']))
    {
            include 'connectdb1.php';

            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $conf_password = mysqli_real_escape_string($conn,$_POST['conf_password']);
            $email= mysqli_real_escape_string($conn,$_POST['email_id']);
           
            if($name=='' $password=='' OR $conf_password=='' OR $email=='')
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

            if($validate)
            {
                $query = "SELECT password from users where name =?";

                $st = mysqli_prepare($conn,$query);        
                mysqli_stmt_bind_param($st,'s',$name);   
                mysqli_stmt_execute($st);              
                $result = mysqli_stmt_get_result($st); 
    
                $row = mysqli_fetch_assoc($result);

                if(mysqli_num_rows($result)>0)
                {
                    $status['status'] = "User already exists";
                    $status_code['status_code'] = "error";
                }

                else
                {
                    $query2 = "INSERT INTO users(name,password,email) VALUES (?,?,?)";
                    $st2 = mysqli_prepare($conn,$query2);
        
                    $hpw = hash('sha512',$password);
                    
                    mysqli_stmt_bind_param($st2,'sss',$name,$hpw,$email);
                    $result2 = mysqli_stmt_execute($st2);
                    
                    if($result2)
                    {
                        $status['status'] = "User Registered";
                        $status_code['status_code'] = "success";
                    }
        
                }


            }


            
    }


}

?>