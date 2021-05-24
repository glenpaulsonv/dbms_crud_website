
<?php


session_start();

if(isset($_SESSION['username']))
{    
    $status['status'] = "Already in Session";
    $status_code['status_code'] = "success";
}
else
{
    session_unset();
    session_destroy();

    $status['status'] = "You're Logged Out";
    $status_code['status_code'] = "warning";
}

?>