<?php 

$conn = mysqli_connect('localhost','root','','vol_database');

$querys = "SELECT * FROM volunteer";
$result = mysqli_query($conn, $querys);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php 

//start the session

session_start();
if(isset($_SESSION['username']))
{    
    
}
else
{
    session_unset();
    session_destroy();
    header("Location: http://localhost/dbms_crud_website/log_out.php");
}

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


        <div class="nav-section">
                <div class="nav-links" id="nav-links">
                
                    <ul>
                        <li><a href="#hero-section">Home</a></li>
                        <li><a href="#service-section">Services</a></li>                    
                        <li><a href="#volunteer-section">Volunteer</a></li> 
                        <li><a href="">Update</a></li> 
                        <li><a href="">Delete</a></li>
                        <li><a href="">Log Out</a></li>                         
                    </ul>
                </div>  

        </div>

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

        <!----------------------------------------Footer----------------------------------------------->

        <section class="footer">
            
            <div class="footer-row">
                
                <img src="assets/images/logo.png" alt="image" width="40px">
                <div class="footer-title">
                    <h3>Volunteer Share Add Value</h3>
                </div>
                <div class="footer-desc">
                    <div class="footer-links" id="footer-links">
                        <ul>
                            <li><a href="#hero-section">Home</a></li>
                            <li><a href="#service-section">Services</a></li>                    
                            <li><a href="#volunteer-section">Volunteer</a></li> 
                            <li><a href="">Update</a></li> 
                            <li><a href="">Delete</a></li>
                            <li><a href="">Log Out</a></li>                         
                        </ul>
                    </div>
                </div>
                
                
            </div>          
            

        </section>

      
</body>
</html>