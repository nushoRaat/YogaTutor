<?php 
session_start();
include "include/connectToDB.php";
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

<link type="text/css" rel="stylesheet" href="css/navbarstylesheet.css"/>

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
                <a href="yoga.php">
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
                <a href="#">
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

        <div class="col-md-4 col-sm-4">
    
            <form action="loggedinHomePage.php" method="POST">
                
            </form>
        </div>

        <div class="col-md-4 col-sm-4">
    
            <h2>Yoga Tutor</h2> 
        </div>

        <div class="col-md-4 col-sm-4">

            <form action="logincss.php" method="POST">
                <div class="form-group mb3 logbtn">

                    <input type="submit" value="Sign in" class="btn" />
                    
                </div>
            </form>
        </div>    
        
    </div>


    <div class= "homebg" >
        <div class="bgimg">
            <?php $sql = "SELECT * FROM hompage ORDER BY serial DESC;";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '
              <img src="'.$row['bgcover'].'" class = "imgbg"/>       
        </div>
        <div class="align-mid">
            <h1>'.$row['welmsg'].' '.$_SESSION['Name'].'</h1>
        </div>';?>
        
    </div>    
              
        

 
    <div class="container">
        <div class="row">
            <?php  echo '
            <br><br>
            <div class="talk">
                <h2>'.$row['sectitle'].'</h2>
                <div class="quoteOne">
                    <p>'.$row['secdes'].'</p>
                </div>
            </div>' ; ?>
        </div>

    </div>

    
    <div class="row kuro">
		<div class="col-lg-4 col-md-12 col-sm-12 separator ">CALL US 24/7 <p id="detail"><?php echo $row['contactno']; ?></p></div>
		<div class="col-lg-4 col-md-12 col-sm-12 separator">EMAIL ADDRESS <p id="detail"><?php echo $row['email']; ?></p></div>
		<div class="col-lg-4 col-md-12 col-sm-12 separator">OPEN HOURS <p id="detail"><?php echo $row['openhrs']; ?></p></div>
				
	</div>

    <div class="container">
        <div class="row ">
            <div class="secImg">
                <div class="alignMid">
                <?php echo $row['sectwoheader']; ?>
                <p><?php echo $row['sectwodes']; ?></p>

                </div>
            </div>
        
        </div>
	</div>


        
    <div class="container">
        <div class="row">

            <?php $sql = "SELECT * FROM yogaimages Order by imgId asc";
                $result = mysqli_query($link, $sql);
                
                $row = mysqli_fetch_assoc($result) ;
                    echo '
            <div class="col-12 col-lg-4 col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.  $row['titleImg'].'</h5>
                        <p class="card-text">'. $row['desImg'].'</p>
                        <a href="'.$row['fileName'].'" class="btn btn-outline-dark">'.  $row['titleImg'].'</a>
                    </div>
                    <img src="'.$row['imgFullName'].'" class="card-img-bottom" alt="...">
                </div>
            </div> '; ?>
             <?php $sql = "SELECT * FROM yogaimages WHERE imgId=53";
                $result = mysqli_query($link, $sql);
                
                $row = mysqli_fetch_assoc($result) ;
                    echo '
            <div class="col-12 col-lg-4 col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.  $row['titleImg'].'</h5>
                        <p class="card-text">'. $row['desImg'].'</p>
                        <a href="'.$row['fileName'].'" class="btn btn-outline-dark">'.  $row['titleImg'].'</a>
                    </div>
                    <img src="'.$row['imgFullName'].'" class="card-img-bottom" alt="...">
                </div>
            </div> '; ?>
             <?php $sql = "SELECT * FROM yogaimages Order by imgId desc";
                $result = mysqli_query($link, $sql);
                
                $row = mysqli_fetch_assoc($result) ;
                    echo '
            <div class="col-12 col-lg-4 col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.  $row['titleImg'].'</h5>
                        <p class="card-text">'. $row['desImg'].'</p>
                        <a href="'.$row['fileName'].'" class="btn btn-outline-dark">'.  $row['titleImg'].'</a>
                    </div>
                    <img src="'.$row['imgFullName'].'" class="card-img-bottom" alt="...">
                </div>
            </div> '; ?>
        </div>
        <br><br><br><br>
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
}else{
     header("Location: loggedinHomePage.php");
     exit();
}
 ?>

