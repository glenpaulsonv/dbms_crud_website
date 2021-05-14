

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Complete Responsive CRUD Website by glenpaulson</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        
            <!----------------------------------------Home Section----------------------------------------------->
        <section class="hero-section">

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

        <!----------------------------------------Stages----------------------------------------------->

        <section class="stages-section">
            <h1 class="slide-in">Stages Involved</h1>
            <p class="slide-in">Its as easy as that</p>

            <div class="row slide-in">
                <div class="stage-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/stage1.png">
                    <h3>Stage 1</h3>
                    <p>Sign In</p>
                </div>
                <div class="stage-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/stage2.png">
                    <h3>Stage 2</h3>
                    <p>Avail Services</p>
                </div>
                <div class="stage-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/stage3.png">
                    <h3>Stage 3</h3>
                    <p>Contribute by Registering</p>
                </div>
            </div>
        </section>


        <!----------------------------------------Services----------------------------------------------->

        <section class="service-section">

           
            <h1 class="slide-in">Our Domains</h1>
            <p class="slide-in">Over the past few months we've been curating professionals from various domains</p>

            <div class="row-services slide-in">
                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/uiux.png">
                    <h3>UI UX Design</h3>
                    <p>We've a bunch of freelance designers to show you the behind the scenes</p>
                </div>

                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/web_dev.png">
                    <h3>Web Dev</h3>
                    <p>Industry Professionals with real time project sessions</p>
                </div>

                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/app.png">
                    <h3>Mobile App Dev</h3>
                    <p>We're proud to have one of the top instructors on Flutter</p>
                </div>

               
            </div>

            <div class="row-services slide-in">
                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/logo.png">
                    <h3>Logo Design</h3>
                    <p>We've a bunch of freelance designers to show you the behind the scenes</p>
                </div>

                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/illustration_2.png">
                    <h3>Illustrations</h3>
                    <p>Industry Professionals with real time project sessions</p>
                </div>

                <div class="service-col">
                    <img src="E:/dev/git_repo/dbms_crud_website/assets/images/brand.png">
                    <h3>Brand Identity</h3>
                    <p>We're proud to have one of the top instructors on Flutter</p>
                </div>

               
            </div>



        </section>

        <!----------------------------------------Volunteer----------------------------------------------->

        <section class="volunteer-section">

            <div class="row-volunteer">

                <div class="volunteer-col-1">
                    <h2>Why Volunteer?</h2>
                    
                </div>

                <div class="volunteer-col-1">

                    <div class="volunteer-form">
                        <form action="volunteer.php" method="post" enctype="multipart/form-data">
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
    
                            <div class="input-box">
                                <input class="form-control" type="text" name="category" required="required">
                                <span>Category</span>
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
                                    <span>Profile Image</span>
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

            <div class="slider">
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

        <section>

        </section>

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
            session_start();

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
            unset($_SESSION['status']);
            }
            ?>
        
    </body>
</html>