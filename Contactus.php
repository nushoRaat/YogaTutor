<?php

session_start();
include "include/connectToDB.php";


/*if(isset($_POST["submit"]))
{ 
  include "include/Function.php";
 
 $obj=new Contact();
 $res=$obj->contactus($_POST);
 if($res==true)
{
  echo "<script>alert('Query successfully Submitted.Thank you')</script>";
}
else{
       echo "<script>alert('Sorry Something wrong!!')</script>";

     }
}*/

if(isset($_POST["submit"])){

        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $phn = $_POST['phone'];
        $msg = $_POST['message'];

        date_default_timezone_set('Asia/Dhaka');
        $currentTime = date('Y-m-d H:i:s');

        include "include/connectToDB.php";
        $sql = "SELECT * FROM contactus";
        $result = mysqli_query($link, $sql);


        $sql2 = "INSERT INTO contactus(name,email,phone,message,querytime) VALUES(' $name', '$email', '$phn','$msg','$currentTime')";
        $result2 = mysqli_query($link, $sql2);
        if($result2){
          echo "<script>alert('Query successfully Submitted.Thank you')</script>";
        }
        else{
          echo "<script>alert('Sorry Something wrong!!')</script>";
   
        }
}

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<link rel="preconnect href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

   

<style >
   *{
      margin: 0;
      padding:5px;
      box-sizing: border-box;
         background-color:#f1f1f1;
      font-family: 'Roboto', sans-serif;
    }
  #contact{
     position:relative;
      min-height: 100vh;
      padding: 50px 100px;
      display: flex;
      justify-content: center;
       align-items: center;
       flex-direction: column;
      background: url(images/lyengar.jpeg)no-repeat;
      background-size:cover;
}

#contact .well{
    margin-top:30px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}
.footer{
    background-color: #545252;

  }

.footer  h3{
      color: #333;
      font-family: monospace;
  }

 .footer a{
      color: #333;
     font-size: 15px;
     transition: 0.3s ease-in-out;
  }
  .footer a:hover{
      color:#c066a4;
      text-decoration: none;
  }

  .footer p{
      color: #333;
      text-align: justify;
  }
  .copyright{
    text-align: center;
    background-color: #1f232c;
    padding: 4% 10%;
    color: white;
}


@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}
</style>

</head>

<body>
 <section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
  
  <div class="row">
    <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form action="" method="POST" >
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="submit">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>





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