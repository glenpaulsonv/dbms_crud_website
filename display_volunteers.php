<?php include 'disp.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Complete Responsive CRUD Website by glenpaulson</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
</head>
<body>

    <!--------------------------------------------------------------Nav Bar--------------------------------------------------------------->

<div class="nav-section">
                <div class="nav-links" id="nav-links-id">
                <img src="assets/images/white_menu_icon.svg" width="30px" onclick="hideMenu()">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="update_entry.php">Update</a></li> 
                        <li><a href="delete_entry.php">Delete</a></li>
                        <li><a href="log_out.php">Log Out</a></li>                         
                    </ul>
                </div> 
                <img src="assets/images/menu_icon.svg" width="30px" onclick="showMenu()"> 

    </div>

      <!--------------------------------------------------------------domain section--------------------------------------------------------------->

        <section class="domain">
                <div class="element-main">
                        <div class="element element-1">
                            <img src="assets/images/b1.png">
                        </div>     
                        <div class="element element-2">
                            <img src="assets/images/b3.png">
                        </div> 
                        
                </div>  

                <div class="domain-row">

                <?php include 'cards.php' ?>
                
                        
                </div>
        </section>

        <!------------------------------------------------------------------Footer---------------------------------------------------------->

        <section class="footer">
            
            <div class="footer-row">
                
                <img src="assets/images/logo.png" alt="image" width="40px">
                <div class="footer-title">
                    <h3>Volunteer Share Add Value</h3>
                </div>
                <div class="footer-desc">
                    <div class="footer-links" id="footer-links">
                        <ul>
                            <li><a href="home.php">Home</a></li>                            
                            <li><a href="update_entry.php">Update</a></li> 
                            <li><a href="delete_entry.php">Delete</a></li>
                            <li><a href="log_out.php">Log Out</a></li>                         
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
                document.body.style.overflowY = "hidden";
            }

            function hideMenu(){
                navLinksVar.style.left = "-150px";
                document.body.style.overflowY = "visible";
            }
        </script>


      
</body>
</html>