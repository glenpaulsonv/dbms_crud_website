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
