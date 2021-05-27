<?php 

session_start();
if(isset($_SESSION['username']))
{    
    

    include 'connectdb2.php';


    $dispCategory = mysqli_real_escape_string($conn,$_GET['id']);
    $querys = "SELECT * FROM volunteers WHERE category =?";

    $st = mysqli_prepare($conn,$querys);        
    mysqli_stmt_bind_param($st,'s',$dispCategory);   
    mysqli_stmt_execute($st);              
    $result = mysqli_stmt_get_result($st); 

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);



}
else
{
    session_unset();
    session_destroy();
    header("Location: http://localhost/dbms_crud_website/log_out.php");
}


?>
