<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "volunteer_db"; 


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful<br>";
}


$rn = $_GET['r'];

$query = "DELETE from student WHERE regno='$rn'";

$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);

echo "Number of affected rows: $aff <br>";
if($result){
    if($aff>0)echo "We deleted the record successfully<hr>";
}
else{
    echo "We could not delete the record successfully<hr>";
}




?>