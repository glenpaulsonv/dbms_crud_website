<?php include 'update.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Entry</title>
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
    <!------------------------------------------------------------update-section------------------------------------------------->
    <section class="sign-in-section">

        <div class="element-main">
            
            <div class="element element-3">
                <img src="assets/images/b5.png">
            </div>  
        </div>    
        
        <div class="row-update">
            

                <div class="sign-in-form">
                    <form action="update_entry.php" method="post">
                        <h2>Update Entry</h2>
                        <div class="inputBox ">
                            <input class="form-control" type="text" name="name" required="required">
                            <span>Name</span>
                        </div>
                        
                        <div class="inputBox ">
                            <input class="form-control" type="text" name="email_id" required="required">
                            <span>Email Id</span>
                        </div>
    
                        <div class="inputBox">
                            <input class="form-control" type="text" name="old_password" required="required">
                            <span>Old Password</span>
                        </div>

                        <div class="inputBox">
                            <input class="form-control" type="text" name="new_password" required="required">
                            <span>New Password</span>
                        </div>

                        <div class="inputBox ">
                            <input class="form-control" type="text" name="new_category" required="required">
                            <span>New Category</span>
                        </div>

                        <div class="inputBox ">
                            <input class="form-control" type="text" name="new_portfolio_link" required="required">
                            <span>New Portfolio Link</span>
                        </div>

                        <div class="inputBox ">
                            <input class="form-control" type="text" name="new_contact" required="required">
                            <span>New Contact</span>
                        </div>

                        
    
                        <div class="inputBox">
                            <input class="form-control" type="submit" name="update" value="Update">
                        </div>
    
                    </form>
                </div>

            
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
    <!------------------------------------------Sweet Alert--------------------------------------------------->
            <script src="js/sweetalert.min.js"></script>        

            <?php
            

            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
            ?>

            <script>
            swal({
            title: "<?php echo $_SESSION['status']; ?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "OK",
            });
            </script>
            <?php
            }
            ?>

    </body>
</html>
