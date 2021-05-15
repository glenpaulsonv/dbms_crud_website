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
        <section class="domain">
                <div class="element-main">
                        <div class="element element-1">
                            <img src="assets/images/b1.png">
                        </div>     
                        <div class="element element-2">
                            <img src="assets/images/b3.png">
                        </div> 
                        <div class="element element-3">
                            <img src="assets/images/b5.png">
                        </div>  
                </div>  

                <div class="domain-row">
                        <?php foreach($users as $user):  ?>

                         <!-----------------------------Volunteer 1---------------------------------->
                        <div class="volunteer_card">
                                <div class="volunteer_content">
                                        <div class="volunteer_img">
                                        <img src="images/<?php echo $user['vol_image']; ?>" />
                                        </div>

                                        <div class="volunteer_desc">
                                                <h3><?php echo $user['name']; ?></h3>
                                                <p><?php echo $user['category']; ?></p>                                                
                                                <p><?php echo $user['portfolio']; ?></p>
                                                <p><?php echo $user['about']; ?></p>
                                                
                                        </div>
                                        
                                        
                                </div>
                        </div>
                         <!-----------------------------Volunteer 1 Ends Here---------------------------------->


                <?php endforeach; ?>
                </div>
        </section>

      
</body>
</html>