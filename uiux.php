<?php 

$conn = mysqli_connect('localhost','root','','volunteer_db');

$query = "SELECT * FROM volunteer";
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview and Upload php</title>

</head>
<body>

    <div class="container">
        <div class="row">
          
        <table class="table">
            <thead>
                <th>Profile Image</th>
                <th>Bio</th>
            </thead>
            <tbody>
            <?php foreach($users as $user):  ?>
                <tr>
                <td>
                <img src="images/<?php echo $user['profile_image']; ?>" width="80" />
                </td>
                <td>
                <?php echo $user['bio']; ?>
                </td>
                
                
               
                </tr>


                <?php endforeach; ?>
            </tbody>
        </table>

        </div>
    </div>
    
</body>
</html>