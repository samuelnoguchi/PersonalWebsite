<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset ="utf-8">
        <meta name ="viewport" content = "width=device-width, initial-scale=1.0" >
        <link rel="stylesheet" type="text/css"  href="vendors/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"  href="resources/css/style.css">
        <link rel="stylesheet" type="text/css"  href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <script src ="vendors/js/jquery-3.2.1.min.js"></script>        
        <script src ="vendors/js/bootstrap.min.js"></script>
        <title>Samuel Noguchi</title>
    </head>
    <body>
        
        <div class = "home">
            <nav class= "navbar navbar-inverse navbar-fixed-top" id="mNavbar">
            <div class = "container-fluid">
                <!--Logo-->
                <div class = "navbar-header">
                    <button type ="button" class = "navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>
                    <a href="#" class = "navbar-brand">SAMUELNOGUCHI</a>
                </div>
                <!--Menu Items-->
                <div class="collapse navbar-collapse" id="mainNavBar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li ><a href = "#">Home</a></li>
                        <li><a href = "#about">About</a></li> 
                        <li><a href = "#projects">Projects</a></li>
                        <li><a href = "#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            
            
            
                <div class = "row"></div>
                <div class = "home-text">
                <div class = "typewriter">
                    <h1>MECHATRONICS ENGINEERING</h1>
                </div> 
                <div class="btn-box">
                    <a class = "btn" href ="#about">About</a>
                    <a class = "btn" href ="#contact">Contact</a>
                 </div>   
            </div>
        </div>
        <a id = "about"></a>
        <div class = "about">
           <div class = "about-info">
                <div class = "container-fluid about-section">
                    <div class = "row">
                        <div class = "col-md-6">
                            <div class = "about-text">
                                <div class = "about-def">
                                    <h1>Mech &middot; a &middot; tron &middot; ics &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1>
                                    <blockquote class= "blockquote">
                                    A field of study that combines the fundamentals of Mechanical, Electrical, and Computer Engineering
                                </blockquote>
                                </div>
                                <div class ="about-me">
                                    Hi, my name is Samuel Noguchi, and I'm a mechatronics engineering student at the University of Waterloo.<br>
                                    I'm from Toronto, Canada.<br>
                                    I love coding and building things.<br><br>
                                    Welcome to my website.
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <img class="img-responsive img-me" src="resources/images/biopic.png" alt="My picture">                    
                        </div>
                   </div>
                </div>              
            </div>
        </div>
        <div class= "projects">
            <div class = "slideshow">
                 <div class="top-left">
                 </div>    
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                     <a id = "projects"></a>
              <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="resources/images/MFR_progress_bw.jpeg" alt="">
                            <div class="carousel-caption">
                                <a class = "btn-proj" href ="#">Guitar Playing Robot</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="resources/images/Tron_days_proto.jpeg" alt="">
                            <div class="carousel-caption">
                                <a class = "btn-proj" href ="#">Tele-Operated Arm</a>
                            </div>    
                        </div>
                        <div class="item">
                            <img src="resources/images/Headstock_drilling%20(1).jpg" alt="">
                            <div class="carousel-caption">
                                <a class = "btn-proj" href ="#">Electric Guitar Build</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <a id = "contact"></a>
        <div class= "contact">
            <div class ="container-fluid contact-section">
                <div class ="row">
                    <div class="col-md-6 contact-info" > 
                        <h2>Contact Information</h2>
                        <p>
                        350 Columbia Street West<br>
                        Waterloo, ON, Canada <br>
                        647-686-7280 <br>    
                        <a href="mailto:Samuel.noguchi@uwaterloo.ca" class ="email">
                        Samuel.noguchi@uwaterloo.ca</a> <br>
                        <a href = "https://github.com/samuelnoguchi" class="email">https://github.com/samuelnoguchi</a><br><br>
                          
                        </p>
                    </div>
                    <div class="col-md-6 contact-info">
                        <div class ="box-container" id="form">
                            <form method="post" action ="mailer.php">
                                
                                <?php
                                if($_GET['success'] == 1){
                                    echo "<div class =\"form-messages success\">Thank you! Your message has been sent.</div>";
                                }
                                 if($_GET['success'] == -1){
                                    echo "<div class =\"form-messages error\">Oops! Something went wrong please try again.</div>";
                                }
                                ?>
                                
                                <div class="form-group">
                                    <label for="name" class ="label">Name:</label>
                                    <input type="name" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class ="label">Email address:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="comment" name = "message" class ="label">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="map">
            <img class ="bg" src ="resources/css/img/map.jpg">
        </div>
    </body>
</html>