<?php include 'volunteer2.php' ?>
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
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
                        <li><a href="update_entry.php">Update</a></li> 
                        <li><a href="delete_entry.php">Delete</a></li>
                        <li><a href="log_out.php">Log Out</a></li>                         
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
                    <img src="assets/images/top_2.png">
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

        <!----------------------------------------Stages----------------------------------------------->

        <section class="stages-section" id="stages-section">
            <h1 class="slide-in">Stages Involved</h1>
            <p class="slide-in">Its as easy as that</p>

            <div class="row slide-in">
                <div class="stage-col">
                    <img src="assets/images/stage1.png">
                    <h3>Stage 1</h3>
                    <p>Sign In</p>
                </div>
                <div class="stage-col">
                    <img src="assets/images/stage2.png">
                    <h3>Stage 2</h3>
                    <p>Avail Services</p>
                </div>
                <div class="stage-col">
                    <img src="assets/images/stage3.png">
                    <h3>Stage 3</h3>
                    <p>Contribute by Registering</p>
                </div>
            </div>
        </section>

        

        <!----------------------------------------Services----------------------------------------------->

        <section class="service-section" id="service-section">

           
            <h1 class="slide-in">Our Domains</h1>
            <p class="slide-in">Over the past few months we've been curating professionals from various domains</p>

            <div class="row-services slide-in">
                <div class="service-col">
                    <img src="assets/images/uiux.png"> 
                    <h3>UI UX Design</h3>
                    <p>We've a bunch of freelance designers to show you the behind the scenes</p>
                </div>

                <div class="service-col">
                    <img src="assets/images/web_dev.png">
                    <h3>Web Dev</h3>
                    <p>Industry Professionals with real time project sessions</p>
                </div>

                <div class="service-col">
                    <img src="assets/images/app.png">
                    <h3>Mobile App Dev</h3>
                    <p>We're proud to have one of the top instructors on Flutter</p>
                </div>

               
            </div>

            <div class="row-services slide-in">
                <div class="service-col">
                <a href="display_volunteers.php?id=Logo Design"><img src="assets/images/Logo Design.png" id="Logo Design"></a>
                    <h3>Logo Design</h3>
                    <p>We've a bunch of freelance designers to show you the behind the scenes</p>
                </div>

                <div class="service-col">
                    <img src="assets/images/illustration_2.png">
                    <h3>Illustrations</h3>
                    <p>Industry Professionals with real time project sessions</p>
                </div>

                <div class="service-col">
                    <img src="assets/images/brand.png">
                    <h3>Brand Identity</h3>
                    <p>We're proud to have one of the top instructors on Flutter</p>
                </div>

               
            </div>



        </section>

        <!----------------------------------------Volunteer----------------------------------------------->

        <section class="volunteer-section" id="volunteer-section">

            <div class="row-volunteer slide-in">

                <div class="volunteer-col-1">
                    <div class="vol_reason">
                        <h2>Why Volunteer?</h2>
                        <br>
                        <p>Giving back to the society matters. There are millions of those out there 
                        who might benefit from free resources. Giving back to the society matters. 
                         There are millions of those out there who might benefit from free resources.</p>

                    </div>
                    
                    
                </div>

                <div class="volunteer-col-1">

                    <div class="volunteer-form">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <h2>Volunteer</h2>

                            <div class="input-box">
                                <input class="form-control" type="text" name="name" required="required">
                                <span>Name</span>
                            </div>
    
                            <div class="input-box">
                                <input class="form-control" type="password" name="password" required="required">
                                <span>Password</span>
                            </div>

                            <div class="input-box">
                                <input class="form-control" type="password" name="conf_password" required="required">
                                <span>Confirm Password</span>
                            </div>

                            <div class="selection">
                                
                            <select class="selection-control" name="category" id="category"  required="required">
                                <option selected hidden value="">Category</option>
                                <option value="UI UX Design">UI UX Design</option>
                                <option value="Web Dev">Web Dev</option>
                                <option value="Mobile App Dev">Mobile App Dev</option>
                                <option value="Logo Design">Logo Design</option>
                                <option value="Illustrations">Illustrations</option>
                                <option value="Brand Identity">Brand Identity</option>                                
                                <option value="Others">Others</option>
                                
                            </select>
                          </div>    
                            

                            <div class="input-box">
                                <input class="form-control" type="text" name="portfolio_link" required="required">
                                <span>Portfolio Link</span>
                            </div>

                            <div class="input-box">
                                <input class="form-control" type="text" name="contact" required="required">
                                <span>Contact</span>
                            </div>

                            <div class="input-box">
                                <input class="form-control" type="text" name="email_id" required="required">
                                <span>Email Id</span>
                            </div>

                            <div class="input-box">
                                <textarea class="form-control" name="about" id="about" required="required"></textarea>
                                <span>About</span>
                            </div>

                             <div class="input-box">
                                    <input type="file" name="volunteer_image" id="volunteerImage" class="form-control">
                                    
                            </div>         
                                                                                                          
    
                            <div class="input-box">
                                <input type="submit" name="register" value="Register">
                            </div>
    
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!----------------------------------------Testimonial----------------------------------------------->

        <section class="testimonial-section">

            <div class="slider slide-in">
                <div class="slide">
                    <div class="testimonial">
                        <p>
                            "One of the best trusted platforms out there. We loved the attention and care
                            provided to us. Helped us to upskill ourselves and get over the initial fear 
                            of starting in a new domain."
                        </p>

                        <p class="client">John</p>
                            <span>Web Developer</span>

                    </div>

                    <div class="slide-img">
                        <img src="assets/images/client.jpg" alt="image">
                    </div>
                </div>
                <div class="buttons">
                    <div class="next"></div>
                    <div class="prev"></div>
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
                            <li><a href="update_entry.php">Update</a></li> 
                            <li><a href="delete_entry.php">Delete</a></li>
                            <li><a href="log_out.php">Log Out</a></li>                         
                        </ul>
                    </div>
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

        <!----------------------------------------Script Reveal------------------------------------------------>
        
        

        <script type="text/javascript">
            window.addEventListener('scroll', slideIn);
    
            function slideIn(){
                var slides = document.querySelectorAll('.slide-in');
            
    
            for(var i=0; i<slides.length; i++)
            {
                var windowheight = window.innerHeight;
                var slideto = slides[i].getBoundingClientRect().top;
                var slidefrom = 150;
    
                if(slideto < windowheight - slidefrom){
                    slides[i].classList.add('active');
                }
                else{
                    slides[i].classList.remove('active');
                }
            }
    
            }
        </script>
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