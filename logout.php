
<?php


session_start();
session_unset();
session_destroy();

$status['status'] = "You're Logged Out";
$status_code['status_code'] = "warning";

?>