<?php 
session_start();

    if (empty($_SESSION['uId']) && empty($_SESSION['user_name'])) {

?>



<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>

<link type="text/css" rel="stylesheet" href="css/servicestylesheet.css"/>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<title>yoga Form</title>

</head>
<body>

    <div class="navigation">
            <ul >
                <li>
                    <a href="Index.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="userProfile.php">
                        <span class="icon"><i class="fas fa-user-circle"></i></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fas fa-stream"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="About.php">
                        <span class="icon"><i class="fas fa-info-circle"></i></span>
                        <span class="title">About us</span>
                    </a>
                </li>
                <li>
                    <a href="About.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Team</span>
                    </a>
                </li>
                 <li>
                <a href="contactus.php">
                    <span class="icon"><i class="fas fa-address-card"></i></span>
                    <span class="title">Contact Us</span>
                </a>
            </li>
            </ul>
    </div> 

   <div class="navbar">
        <div class="col-md-4">
        
            <form action="loggedinHomePage.php" method="POST">
            
            </form>
        </div>
        <div class="col-md-4">

            <h2>Yoga Tutor</h2> 
        </div>
        <div class="col-md-4 ">
            <form action="logincss.php" method="POST">
                    <div class="form-group mb3 logbtn">

                        <input type="submit" value="Sign in" class="btn" />
                        
                    </div>
            </form>      
        </div>   
    </div>

    <div class="container">
        <br>
        <br>
        <br>

        <div class="col-12 mt-4"> 
                           <h4 class="display-4 text-center">HOT YOGA</h4>
                            <p class="lead text-center">The initial fear and doubt Acro Yoga elicits turns into elation and empowerment, as people build the trust and confidence needed to spread their wings. Connect with your partner and let go of your fears with this social form of yoga.</p>
                     </div>

       
        <div class="image-view">
            <img src="images/hot1.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
        </div>
        <div class=" btn-outline-dark imageName">
            <h1>Eagle Pose </h1><br>
        </div>

        <br>
        <div class="imageTitle">
            <p>You need strength, flexibility, and endurance, and unwavering concentration for Eagle Pose.(gah-rue-DAHS-anna)
            Garuda = the mythic “king of the birds,” the vehicle of Vishnu. The word is usually rendered into English as “eagle,” 
            though according to one dictionary the name literally means “devourer,” because Garuda was originally identified with
            the “all-consuming fire of the suns rays.”</p><br><br><br><br>
        </div>
        <div class="row">
        <div class="col-3 "> 
                     <img src="images/hot5.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA freeplay</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA decoded</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA secondary</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot4.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>Must try HOT YOGA</h6>
                           
                     </div>
        </div>
        <br>
        <br>
        <br>


        <div class="imageDes">
            <h2>Eagle Pose: Step-by-Step Instructions</h2><br><br>
            <ul>
                <li>Step 1
                        Stand in Tadasana. Bend your knees slightly, lift your left foot up and, balancing on your right foot, cross your 
                        left thigh over the right. Point your left toes toward the floor, press the foot back, and then hook the top of the 
                        foot behind the lower right calf. Balance on the right foot.
                        <br><br>

                </li>
                <li>Step 2
                    Stretch your arms straight forward, parallel to the floor, and spread your scapulas wide across the back of your torso. 
                    Cross the arms in front of your torso so that the right arm is above the left, then bend your elbows. Snug the right 
                    elbow into the crook of the left, and raise the forearms perpendicular to the floor. The backs of your hands should be 
                    facing each other.
                    <br><br>

                </li>
                <li>Step 3
                    Press the right hand to the right and the left hand to the left, so that the palms are now facing each other. The thumb 
                    of the right hand should pass in front of the little finger of the left. Now press the palms together (as much as is 
                    possible for you), lift your elbows up, and stretch the fingers toward the ceiling.
                    <br><br>

                </li>
                <li>Step 4
                    Stay for 15 to 30 seconds, then unwind the legs and arms and stand in Tadasana again. Repeat for the same length of 
                    time with the arms and legs reversed.
                    <br><br>
        
                </li>
            </ul>

       </div>
    </div>


    <div class="footer">
                <br><br><br>
                <div class="container">
                    <div class="row">

                        <div class="foot col-md-4">
                        
                            <h3>About Us</h3>
                            <br>
                            <p><a href="About.php">Services</a></p>
                            <p><a href="About.php">Policy</a></p>
                            <p> <a href="About.php">Careers</a></p>
                            <p> <a href="About.php">Services</a></p>

                            </div>

                        <div class="foot col-md-4">
                            
                            <h3>Resouces</h3>
                            <br>
                            <p><a href="Yoga.php">Docs</a></p>
                            <p><a href="loggedinHomePage.php">Links</a></p>
                            <p> <a href="dashboard.php">Ebook</a></p>
                            <p> <a href="Register.php">Webiners</a></p>

                        </div>

                        <div class="foot col-md-4">
                            
                            <h3>Contact Us</h3>
                            <br>
                            <p><a href="Contactus.php">Help</a></p>
                            <p><a href="Contactus.php">Sales</a></p>
                            <p> <a href="Contactus.php">Advertise</a></p>
                            <p> <a href="Contactus.php">Help</a></p>

                        </div>
                  
                </div>
            </div>

			<hr style="height: 2px;">
			<div class="container">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<div class="social-media">

				<ul class="list-unstyled">
					
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>

				</ul>
				</div>
				</div>

				<div class="col-md-4"></div>


				<br><br><br><br>

            </div>
        </div>

            <div class="copyright">
                © Copyright 2021. All Rights Reserved
            </div>    


    </footer>


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>  

</body>
</HTML>    

<?php 
}
else{
     //header("Location: loggedinHomePage.php");

?>




<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>

<link type="text/css" rel="stylesheet" href="css/servicestylesheet.css"/>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<title>yoga Form</title>

</head>
<body>

    <div class="navigation">
            <ul >
                <li>
                    <a href="Index.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="userProfile.php">
                        <span class="icon"><i class="fas fa-user-circle"></i></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fas fa-stream"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="About.php">
                        <span class="icon"><i class="fas fa-info-circle"></i></span>
                        <span class="title">About us</span>
                    </a>
                </li>
                <li>
                    <a href="About.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Team</span>
                    </a>
                </li>
                 <li>
                <a href="contactus.php">
                    <span class="icon"><i class="fas fa-address-card"></i></span>
                    <span class="title">Contact Us</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <span class="icon"> <i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Log Out</span>
                </a>
            </li>
            </ul>
    </div> 

   <div class="navbar">
        <div class="col-md-4">
        
            <form action="loggedinHomePage.php" method="POST">
            
            </form>
        </div>
        <div class="col-md-4">

            <h2>Yoga Tutor</h2> 
        </div>
        <div class="col-md-4">
           
                <div class=" mb3 ">
                    <a href="userProfile.php"><i class="fas fa-user-circle usericon"></i></a>   
                </div>     
        </div>   
    </div>

    <div class="container">
        <br>
        <br>
        <br>

        <div class="col-12 mt-4"> 
                           <h4 class="display-4 text-center">HOT YOGA</h4>
                            <p class="lead text-center">The initial fear and doubt Acro Yoga elicits turns into elation and empowerment, as people build the trust and confidence needed to spread their wings. Connect with your partner and let go of your fears with this social form of yoga.</p>
                     </div>

       
        <div class="image-view">
            <img src="images/hot1.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
        </div>
        <div class=" btn-outline-dark imageName">
            <h1>Eagle Pose </h1><br>
        </div>

        <br>
        <div class="imageTitle">
            <p>You need strength, flexibility, and endurance, and unwavering concentration for Eagle Pose.(gah-rue-DAHS-anna)
            Garuda = the mythic “king of the birds,” the vehicle of Vishnu. The word is usually rendered into English as “eagle,” 
            though according to one dictionary the name literally means “devourer,” because Garuda was originally identified with
            the “all-consuming fire of the suns rays.”</p><br><br><br><br>
        </div>
        <div class="row">
        <div class="col-3 "> 
                     <img src="images/hot5.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA freeplay</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA decoded</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>HOT YOGA secondary</h6>
                           
                     </div>
                      <div class="col-3 "> 
                     <img src="images/hot4.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h6>Must try HOT YOGA</h6>
                           
                     </div>
        </div>
        <br>
        <br>
        <br>


        <div class="imageDes">
            <h2>Eagle Pose: Step-by-Step Instructions</h2><br><br>
            <ul>
                <li>Step 1
                        Stand in Tadasana. Bend your knees slightly, lift your left foot up and, balancing on your right foot, cross your 
                        left thigh over the right. Point your left toes toward the floor, press the foot back, and then hook the top of the 
                        foot behind the lower right calf. Balance on the right foot.
                        <br><br>

                </li>
                <li>Step 2
                    Stretch your arms straight forward, parallel to the floor, and spread your scapulas wide across the back of your torso. 
                    Cross the arms in front of your torso so that the right arm is above the left, then bend your elbows. Snug the right 
                    elbow into the crook of the left, and raise the forearms perpendicular to the floor. The backs of your hands should be 
                    facing each other.
                    <br><br>

                </li>
                <li>Step 3
                    Press the right hand to the right and the left hand to the left, so that the palms are now facing each other. The thumb 
                    of the right hand should pass in front of the little finger of the left. Now press the palms together (as much as is 
                    possible for you), lift your elbows up, and stretch the fingers toward the ceiling.
                    <br><br>

                </li>
                <li>Step 4
                    Stay for 15 to 30 seconds, then unwind the legs and arms and stand in Tadasana again. Repeat for the same length of 
                    time with the arms and legs reversed.
                    <br><br>
        
                </li>
            </ul>

       </div>
    </div>


    <div class="footer">
                <br><br><br>
                <div class="container">
                    <div class="row">

                        <div class="foot col-md-4">
                        
                            <h3>About Us</h3>
                            <br>
                            <p><a href="About.php">Services</a></p>
                            <p><a href="About.php">Policy</a></p>
                            <p> <a href="About.php">Careers</a></p>
                            <p> <a href="About.php">Services</a></p>

                            </div>

                        <div class="foot col-md-4">
                            
                            <h3>Resouces</h3>
                            <br>
                            <p><a href="Yoga.php">Docs</a></p>
                            <p><a href="loggedinHomePage.php">Links</a></p>
                            <p> <a href="dashboard.php">Ebook</a></p>
                            <p> <a href="Register.php">Webiners</a></p>

                        </div>

                        <div class="foot col-md-4">
                            
                            <h3>Contact Us</h3>
                            <br>
                            <p><a href="Contactus.php">Help</a></p>
                            <p><a href="Contactus.php">Sales</a></p>
                            <p> <a href="Contactus.php">Advertise</a></p>
                            <p> <a href="Contactus.php">Help</a></p>

                        </div>
                  
                </div>
            </div>

			<hr style="height: 2px;">
			<div class="container">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<div class="social-media">

				<ul class="list-unstyled">
					
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>

				</ul>
				</div>
				</div>

				<div class="col-md-4"></div>


				<br><br><br><br>

            </div>
        </div>

            <div class="copyright">
                © Copyright 2021. All Rights Reserved
            </div>    


    </footer>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>  

</body>
</HTML>

<?php

     exit();
}
 ?>