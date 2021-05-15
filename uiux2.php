<?php 

$conn = mysqli_connect('localhost','root','','volunteer_db');

$querys = "SELECT * FROM volunteer";
$result = mysqli_query($conn, $querys);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Complete Responsive CRUD Website by glenpaulson</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
</head>
<body>
<section class="volunteer">
<?php foreach($users as $user):  ?>


<div class="sub">

    <div class="details">
    <p> 
    <?php echo $user['about']; ?>
    </p>    
    
    </div>
    <div class="volunteer_image">
    <img src="images/<?php echo $user['vol_image']; ?>" />
    </div>

</div>

<?php endforeach; ?>
</section>
</body>
</html>