<?php

session_start();
if(isset($_SESSION['username']))
{        

    $validate = True;

        if(isset($_POST['update']))
        {
            include 'connectdb2.php';

            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email_id']);
            $password = mysqli_real_escape_string($conn,$_POST['old_password']);
            $new_password = mysqli_real_escape_string($conn,$_POST['new_password']);
            $new_category = mysqli_real_escape_string($conn,$_POST['new_category']); 
            $new_portfolio = mysqli_real_escape_string($conn,$_POST['new_portfolio_link']);
            $new_contact = mysqli_real_escape_string($conn,$_POST['new_contact']);

            if($name=='' OR $email=='' OR $password=='' OR $new_password=='' OR $new_category=='' OR $new_portfolio=='' OR $new_contact=='')
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
                        $hpwnew = hash('sha512',$new_password);
                        $query2 = "UPDATE volunteers SET password=?, category=?, portfolio=?, contact=?  WHERE name=?";                        
                        
                        $st2 = mysqli_prepare($conn,$query2);                     
                        mysqli_stmt_bind_param($st2,'sssss',$hpwnew,$new_category,$new_portfolio,$new_contact,$nam);
                        $result2 = mysqli_stmt_execute($st2);
                    
                        if($result2)
                        {
                            $status['status'] = "Details Updated";
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