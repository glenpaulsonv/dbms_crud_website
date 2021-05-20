<?php include 'volunteer2.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Complete Responsive CRUD Website by glenpaulson</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        
    </head>
    <body>
        
    <div class="nav-section">
                <div class="nav-links" id="nav-links-id">
                <img src="assets/images/close_icon.svg" width="30px" onclick="hideMenu()">
                    <ul>
                        <li><a href="#hero-section">Home</a></li>
                        <li><a href="#service-section">Services</a></li>                    
                        <li><a href="#volunteer-section">Volunteer</a></li> 
                        <li><a href="">Update</a></li> 
                        <li><a href="">Delete</a></li>
                        <li><a href="">Log Out</a></li>                         
                    </ul>
                </div> 
                <img src="assets/images/menu_icon.svg" width="30px" onclick="showMenu()"> 

    </div>
        
            <!----------------------------------------Home Section----------------------------------------------->
        <section class="hero-section" id="hero-section">
        
            
        

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
         
            <div class="row">
                <div class="hero-col-1">
                    <h4>Hello there!</h4>
                    <h3>Volunteer Share Add Value</h3>
                    <p>We're a closed community of curated professionals and volunteers<br>
                    willing to offer their services back to the community free of cost.<br>
                    If there's a value you can share, a skill you can teach, join us!</p>
                    <h4>Let's make the world a better place - one step at a time.</h4>
                </div>           
            </div>
           
        </section>

        <!--------------------------------------------------------Script ----------------------------------------------------------->

        <script>
            var navLinksVar = document.getElementById("nav-links-id");

            function showMenu(){
                navLinksVar.style.left = "0px";
            }

            function hideMenu(){
                navLinksVar.style.left = "-150px";
            }
        </script>
</body>
</html>

