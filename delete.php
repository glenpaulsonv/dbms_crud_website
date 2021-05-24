<?php

session_start();
if(isset($_SESSION['username']))
{    

    $validate = True;

        if(isset($_POST['delete']))
        {
            include 'connectdb2.php';

            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);        
        
            if($name=='' OR $password=='')
            {
            $status['status'] = "Enter all details";
            $status_code['status_code'] = "error";
            $validate = False;
            }

            if($validate)
            {

                $query = "SELECT password from volunteers where name =?";

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
                        $query = "DELETE from volunteers WHERE name=? AND password=?";
                        
                        $st2 = mysqli_prepare($conn,$query2);                     
                        mysqli_stmt_bind_param($st2,'ss',$name,$hpw);
                        $result2 = mysqli_stmt_execute($st2);
                    
                        if($result2)
                        {
                            $status['status'] = "User Deleted";
                            $status_code['status_code'] = "success";
                        }
                        else
                        {
                            $status['status'] = "Try again later";
                            $status_code['status_code'] = "error"; 
                        }
                    }
                    else
                    {
                    $status['status'] = "Invalid Password";
                    $status_code['status_code'] = "error";                
                    }
                }
                else
                {
                    $status['status'] = "Not a registered volunteer";
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