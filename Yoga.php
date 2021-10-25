<?php 
session_start();
include "include/connectToDB.php";

    if (empty($_SESSION['uId']) && empty($_SESSION['user_name'])) {


 ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="css/yogastylesheet.css"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
  <header>

  
   
  <nav class="navbar navbar-expand-lg fixed-top navbar-light "style="background-color: #e4bad4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder" >Yoga Tutor</a>
           
            <form action="logincss.php" method="POST">
                <div class="form-group mb3 logbtn">

                    <input type="submit" value="Sign in" class="btn" />
                    
                </div>
           </form>
         
        </div>
    </nav>

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
   

 
    </header>

<main>
    
    <div class="jumbotron jumbotron-fluid">
    <?php $sql = "SELECT * FROM coverup ORDER BY cid DESC;";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                        //  $imgid =  $row['imgId'];
                    echo 
            '<img  src="'.$row['cpic'].'" class="img-fluid w-100 h-auto" alt="Lily"/>';?>
    </div>
            
        <div class="container">
            <div class="container-fluid">
            
                <div class="row">

                    
                <?php $sql = "SELECT * FROM coverup ORDER BY cid DESC;";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_assoc($result);
                              //  $imgid =  $row['imgId'];
                         echo 
                    '
                    <div class="col-12 mt-4"> 
                        <h1 class="display-4 text-center">'.$row['ctitle'].'</h1>
                        <p class="lead text-center">'.$row['cdes'].'</p>
                    </div>
                    <div class="col-12 mt-2"> 
                        <h4 class="text-center">'.$row['gdes'].'</h4>
                        
                    </div>';  ?>

                    

                    <?php $sql = "SELECT * FROM yogaimages";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_array($result)){
                           
                            echo ' 
                            <div class="col-md-4 mt-4 ">
                            
                                <div class="card" >
                                    <img src="'.$row['imgFullName'].'" class="card-img-top" alt="Acro">
                                    <div class="card-body">
                                        <h5 class="card-title">'.  $row['titleImg'].' </h5>
                                        <p class="card-text">'. $row['desImg'].' </p>
                                        <form action="'.$row['fileName'].'" method="POST" > 
                                        <input type="submit" name = "detail" class="btn btn-outline-dark"value="'.  $row['titleImg'].'"></input>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                             } ?>     
                </div>
            </div>
        </div>

    </main>
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



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script> 

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>

<?php 
}else{
     header("Location: dashboard.php");
     exit();
}
 ?>
