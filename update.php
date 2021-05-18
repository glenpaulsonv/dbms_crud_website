<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "vol_database"; 

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn)
    {
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }

else
    {
        if(isset($_POST['update']))
        {
            $name = $_POST['name'];
            $email = $_POST['email_id'];
            $password = $_POST['old_password']; 
            $new_password = $_POST['new_password'];
            $new_category = $_POST['new_category'];
            $new_portfolio = $_POST['new_portfolio_link'];
            $new_contact = $_POST['new_contact'];           
             


            $email_verification = "SELECT email from volunteer WHERE email = '$email'";
            $result1 = mysqli_query($conn, $email_verification);
            $num = mysqli_num_rows($result1);
                
            if($num > 0)
            {

                $password_verification = "SELECT password from volunteer WHERE password = '$password'";
                $result2 = mysqli_query($conn, $password_verification);
                $num1 = mysqli_num_rows($result2);

                if($num1 > 0)
                {
                    $query = "UPDATE volunteer SET name='$name', password='$new_password', category='$new_category', portfolio='$new_portfolio', contact='$new_contact'  WHERE email='$email'";
                    $result3 = mysqli_query($conn, $query);  
                    
                    if($result3)
                    {
                        $_SESSION['status'] = "User Deleted";
                        $_SESSION['status_code'] = "success";
                    }
                    else
                    {
                        $_SESSION['status'] = "Try again";
                        $_SESSION['status_code'] = "error";  
                    }
                    
                }
                else
                {
                  
                    $_SESSION['status'] = "Incorrect Password";
                    $_SESSION['status_code'] = "error";     
                }

                
                


                
            }

            else
                {
                    $_SESSION['status'] = "Verify your email id";
                    $_SESSION['status_code'] = "error";
                }
            
            
                


        }
    }


$rn = $_GET['r'];
$na = $_GET['n'];
// Usage of WHERE Clause to Update Data
$sql = "UPDATE student SET first_name='$na' WHERE regno='$rn'";

$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);

echo "Number of affected rows: $aff <br>";
if($result){
    if($aff>0)echo "We updated the record successfully<hr>";
}
else{
    echo "We could not update the record successfully<hr>";
}



echo "<u><b>UPDATED RECORD</b></u><br>";
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
// echo $num . " records found in the DataBase<br>";

if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo "<b>Name:</b>".$row['first_name'] .  ".<br><b>Registration number</b> ". $row['regno'] ."<br><b>City:</b> ". $row['city'];
        echo "<br><hr>";
    }
}

?>