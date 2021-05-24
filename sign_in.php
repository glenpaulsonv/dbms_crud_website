<?php include 'signin.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
    <div class="nav-section">
                <div class="nav-links" id="nav-links-id">
                <img src="assets/images/close_icon.svg" width="30px" onclick="hideMenu()">
                    <ul>                        
                        <li><a href="sign_up.php">Sign Up</a></li>                         
                    </ul>
                </div> 
                <img src="assets/images/menu_icon.svg" width="30px" onclick="showMenu()"> 

    </div>
    <!------------------------------------------------------------sign-in section------------------------------------------------->
    <section class="sign-in-section">

        <div class="element-main">
            <div class="element element-1">
                <img src="assets/images/b1.png">
            </div>     
            <div class="element element-2">
                <img src="assets/images/b3.png">
            </div> 
            <div class="element element-3">
                <img src="assets/images/top_2.png">
            </div>  
        </div>    
        
        <div class="row-sign-in">
            

                <div class="sign-in-form">
                <form action="sign_in.php" method="post">
                        <h2>Sign In</h2>
                        <div class="inputBox ">
                            <input class="form-control" type="text" name="name" required="required">
                            <span>User Name</span>
                        </div>

                        <div class="inputBox ">
                            <input class="form-control" type="text" name="email_id" required="required">
                            <span>Email Id</span>
                        </div>
    
                        <div class="inputBox">
                            <input class="form-control" type="password" name="password" required="required">
                            <span>Password</span>
                        </div>

                        
    
                        <div class="inputBox">
                            <input class="form-control" type="submit" name="sign-in" value="Sign In">
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
                            
                            <li><a href="sign_up.php">Sign Up</a></li>                         
                        </ul>
                    </div>
                </div>
                
                
            </div>          
            

        </section>

     <!--------------------------------------------------------Responsive Nav Script ----------------------------------------------------------->

     <script>
            var navLinksVar = document.getElementById("nav-links-id");

            function showMenu(){
                navLinksVar.style.left = "0px";
            }

            function hideMenu(){
                navLinksVar.style.left = "-150px";
            }
        </script>    


    <!------------------------------------------Sweet Alert--------------------------------------------------->
            <script src="js/sweetalert.min.js"></script>        

            <?php
            

            if(isset($status['status']) && $status['status'] !='')
            {
            ?>

            <script>
            swal({
            title: "<?php echo $status['status']; ?>",
            //text: "You clicked the button!",
            icon: "<?php echo $status_code['status_code']; ?>",
            button: "OK",
            });
            </script>
            <?php
            }
            ?>
        

    </body>
</html>
