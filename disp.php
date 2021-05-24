<?php 

session_start();
if(isset($_SESSION['username']))
{    
    

$conn = mysqli_connect('localhost','root','','vol_database');

$dispCategory = $_GET['id'];


$querys = "SELECT * FROM volunteer WHERE category = '$dispCategory'";
$result = mysqli_query($conn, $querys);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

}
else
{
    session_unset();
    session_destroy();
    header("Location: http://localhost/dbms_crud_website/log_out.php");
}


?>
