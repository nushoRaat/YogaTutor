<?php
    session_start();
    include "include/connectToDB.php";
    $ustat = $_SESSION['status'];
    if (isset($_SESSION['uId']) && isset($_SESSION['user_name'])) {

        if(isset($_POST["uploadabout"])){

            $imgTitle = $_POST['pictitle']; 
            $imgDes = $_POST['picdes'];
            $detailfile = $_POST['picphp'];
            //echo $imgDes;
        
            $imageFile = $_FILES['picfile'];
        
            $fileName = $imageFile["name"];
            $fileType = $imageFile["type"];
            $fileTmpName = $imageFile["tmp_name"];
            $fileError = $imageFile["error"];
            $fileSize = $imageFile["size"];
        
            //echo $imgTitle;
        
            $fileExt = explode(".",$fileName);
            $fileActualExt = strtolower(end($fileExt));
        
        
            $imageName = $fileName .".". uniqid("",true) .".".$fileActualExt;
            //echo $imageName;
        
            $target_dir = "files/.$imageName";
            $target_file = $target_dir;
            move_uploaded_file($fileTmpName,$target_file);
        
            include "include/connectToDB.php";
            $sql = "SELECT * FROM abouttable";
            $result = mysqli_query($link, $sql);
        
        
                $sql2 = "INSERT INTO abouttable(img,head,desone,destwo) VALUES('$target_file','$imgTitle','$imgDes','$detailfile')";
                $result2 = mysqli_query($link, $sql2);
                
            }

?>        
<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>


<link href="<link rel="preconnect href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/about.css"/>

<title>yoga Form</title>

</head>
<body>

    <div class="navigation">
        <ul >
            <li><?php if (isset($_SESSION['uId']) && isset($_SESSION['user_name'])) { ?>
                <a href="loggedinHomePage.php">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">Home</span>
                </a>
                <?php 
                    }else{
                        header("Location: Index.php");
                        exit();
                    }
                ?>
            </li>
            <li><?php if (isset($_SESSION['uId']) && isset($_SESSION['user_name'])) { ?>
                <a href="userProfile.php">
                    <span class="icon"><i class="fas fa-user-circle"></i></span>
                    <span class="title">Profile</span>
                </a>
                <?php 
                    }else{
                        header("Location: Yoga.php");
                        exit();
                    }
                ?>
            </li>
            <li><?php if (isset($_SESSION['uId']) && isset($_SESSION['user_name'])) { ?>
                <a href="dashboard.php">
                    <span class="icon"><i class="fas fa-stream"></i></span>
                    <span class="title">Dashboard</span>
                </a>
                <?php 
                    }else{
                        header("Location: Yoga.php");
                        exit();
                    }
                ?>
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
            <form action="loggedinHomePage.php" method="POST"> </form>
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


<div class="image-aboutus-banner" style="margin-top:70px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
            <p>______________________________________________________________________________</p>
          <h5 class="section-title h1">About US</h5>
         <p>The Culture and Practice of the Yoga.</p>
         <p>______________________________________________________________________________</p>
         
       </div>
    </div>
</div>
</div>
<div class="container paddingTB60">
    <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                 <hr>
                 <?php $sql = "SELECT * FROM abouttable ORDER BY inc DESC;";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '

                <h2>'.$row['head'].'</h2>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid w-100 h-auto" src="'.$row['img'].'" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">'.$row['desone'].'</p>
                <p>'.$row['destwo'].'</p> '; ?>
                

                <hr>




               </div>
               <div class="container">
        <div class="row">
                  <div class="col-md-6">
                    <br>
                    <br>
                      <p>______________________________________________________________________________</p>
                      <h2 class="strong">Who we are ? and<br>what we do?</h2>
                      <p>______________________________________________________________________________</p>
                        <p class="lead">This is the world's leading portal for<br>easy and quick </p>
                    </div>
                    <div class="col-md-6">
                      <br>
                      <br>
                      <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                        <p>If you’re looking for a yoga vacation, but not sure where to begin–we’ve got you covered. We’ve searched all over the globe to review and find the best yoga travel vacations, retreats, and festivals by location so you don’t have to.</p>
                         <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                          <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                           <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                    </div>
</div>
    </div>


    <div class="container">
          <br>
          <br>
          <p>______________________________________________________________________________</p>
                      <h2 class="strong"> The  steps of more  advancement </h2>
                      <p>______________________________________________________________________________</p>
            <div class="row">
                    <div class="col-4 "> 
                        <img src="images/car1.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                        <h3>PHILOSOPHY</h3>
                           
                    </div>
                    <div class="col-4 "> 
                        <img src="images/car2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                        <h3>SANSKRIT</h3>
                           
                    </div>
                    <div class="col-4 "> 
                        <img src="images/car3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                        <h3>SPIRITUALITY</h3>
                           
                    </div>
                    
            </div>
            <p>The poem owes a great debt to the Gita as well as the
                  Katha Upanishad. The first verse in particular seems to have been 
                  lifted almost verbatim from chapter 2 of the Gita, when Krishna is 
                    trying to persuade Arjuna to fight: “The man who believeth that it is 
                  the soul which killeth, and he who thinketh that the soul may be 
               killed.” Taken with a few lines that appear later—”I am the sacrifice; I
                  am the worship” and “He also is my beloved servant…to whom praise and 
                 blame are one”—you have many elements of Emerson’s poem.
                Historian James A. Hijiya argues that this teaching of 
                 created the bomb and advocated its use on Hiroshima and Nagasaki, only 
                  to become a leading critic of nuclear weapons and war. Just as Krishna 
                 insisted that renouncing action was far worse than taking disciplined 
                  action (and was ultimately not possible in any case), so Oppenheimer 
                   rejected the ivory tower, and its illusion of remove, for the Manhattan 
                  Project.</p>
                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <p>______________________________________________________________________________</p>
                        <h2 class="strong">Why choose Yoga Tutor?</h2>
                        <p>______________________________________________________________________________</p>
                        <p class="lead">If you’re looking for a yoga vacation, but<br> not sure where to begin–we’ve got you covered.<br> We’ve searched all over the globe to.</p>
                    </div>

                    <div class="col-1 ">
                        <br>
                        <br> 
                        <img src="images/ab2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>        
                    </div>
                    <div class="col-2 "> 
                        <br>
                        <br>
                        <img src="images/ab1.png" class="img-fluid w-100 h-auto" alt="..."><br><br>       
                    </div>
                      <div class="col-3 "> 
                        <br>
                    <br>
                    <img src="images/ab3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     
                           
                    </div>
          
                </div>

                <?php if($ustat =='2'){?>
                    <br><br>
                    <div class="col-12 mt-4"> 
                    <div class="gallaryUp">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <input type="file" name="picfile" required> 
                        <input type="text" name="pictitle" placeholder="Image Title" required>
                        <input type="text" name="picdes" placeholder="Image Description" required>
                        <input type="text" name="picphp" placeholder="Details" required>
                        <button type="submit" name="uploadabout">Upload Image</button>
                    </form>
                    </div> 
                    </div>
                    <br><br><?php }else{?><br><br>
                    <?php }?>
         
                <p>______________________________________________________________________________</p>
                <h5 class="section-title h1">OUR TEAM</h5>
                <p>______________________________________________________________________________</p>
                <div class="row">
                    <div class="col-md-6 mt-4 ">
                       <div class="card">
                            <img src="images/nushraat.jpg" class="card-img-top" alt="Acro">
                                <div class="card-body">
                                    <h5 class="card-title">Nushraat Jahan</h5>
                                    
                                    <p class="card-text">Institition:Ahshanullah Science &amp; 
                                    Technology</p>
                                    <p class="card-text">Department of CSE</p>
                                    <p class="card-text">Year &amp; Smester:3.1</p>
                                    <p class="card-text">ID:180104032</p>
                                    
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 ">
                       <div class="card">
                            <img src="images/nilufar.jpg" class="card-img-top" alt="prenatal">
                                 <div class="card-body">
                                  <h5 class="card-title">Nilufar Hossain</h5>
                                  <p class="card-text">Institition:Ahshanullah <br>Science &amp; 
                                  Technology</p>
                                   <p class="card-text">Department of CSE</p>
                                   <p class="card-text">Year &amp; Smester:3.1</p>
                                   <p class="card-text">ID:180104031</p>
                                    
                                  </div>

                        </div>

                    </div>                    
                </div>
                      
        </div>
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
}else{
     //header("Location: Index.php");?>


<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>


<link href="<link rel="preconnect href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/about.css"/>

<title>yoga Form</title>

</head>
<body>

    <div class="navigation">
        <ul >
            <li>
                <a href="loggedinHomePage.php">
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
            <form action="loggedinHomePage.php" method="POST"> </form>
        </div>
        <div class="col-md-4">
            <h2>Yoga Tutor</h2> 
        </div>
        <div class="col-md-4">
        <form action="logincss.php" method="POST">
                <div class="form-group mb3 logbtn">

                    <input type="submit" value="Sign in" class="btn" />
                    
                </div>
           </form>           
        </div>   
    </div>  


<div class="image-aboutus-banner" style="margin-top:70px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
            <p>______________________________________________________________________________</p>
          <h5 class="section-title h1">About US</h5>
         <p>The Culture and Practice of the Yoga.</p>
         <p>______________________________________________________________________________</p>
         
       </div>
    </div>
</div>
</div>
<div class="container paddingTB60">
    <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                 <hr>

                 <?php $sql = "SELECT * FROM abouttable ORDER BY inc DESC;";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '

                <h2>'.$row['head'].'</h2>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid w-100 h-auto" src="'.$row['img'].'" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">'.$row['desone'].'</p>
                <p>'.$row['destwo'].'</p> '; ?>
                

                <hr>




               </div>
               <div class="container">
        <div class="row">
                  <div class="col-md-6">
                    <br>
                    <br>
                      <p>______________________________________________________________________________</p>
                      <h2 class="strong">Who we are ? and<br>what we do?</h2>
                      <p>______________________________________________________________________________</p>
                        <p class="lead">This is the world's leading portal for<br>easy and quick </p>
                    </div>
                    <div class="col-md-6">
                      <br>
                      <br>
                      <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                        <p>If you’re looking for a yoga vacation, but not sure where to begin–we’ve got you covered. We’ve searched all over the globe to review and find the best yoga travel vacations, retreats, and festivals by location so you don’t have to.</p>
                         <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                          <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                           <p>Take your yoga off the mat and into your life for more balance and clarity in everything from relationships and parenting to your home and garden. This is your guide to a living an authentic lifestyle despite everyday stress.</p>
                    </div>
</div>
    </div>


        <div class="container">
          <br>
          <br>
          <p>______________________________________________________________________________</p>
                      <h2 class="strong"> The  steps of more  advancement </h2>
                      <p>______________________________________________________________________________</p>
          <div class="row">
        <div class="col-4 "> 
                     <img src="images/car1.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h3>PHILOSOPHY</h3>
                           
                     </div>
                      <div class="col-4 "> 
                     <img src="images/car2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h3>SANSKRIT</h3>
                           
                     </div>
                      <div class="col-4 "> 
                     <img src="images/car3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     <h3>SPIRITUALITY</h3>
                           
                     </div>
                    
        </div>
        <p>The poem owes a great debt to the Gita as well as the
                  Katha Upanishad. The first verse in particular seems to have been 
                  lifted almost verbatim from chapter 2 of the Gita, when Krishna is 
                    trying to persuade Arjuna to fight: “The man who believeth that it is 
                  the soul which killeth, and he who thinketh that the soul may be 
               killed.” Taken with a few lines that appear later—”I am the sacrifice; I
                  am the worship” and “He also is my beloved servant…to whom praise and 
                 blame are one”—you have many elements of Emerson’s poem.
                Historian James A. Hijiya argues that this teaching of 
                 created the bomb and advocated its use on Hiroshima and Nagasaki, only 
                  to become a leading critic of nuclear weapons and war. Just as Krishna 
                 insisted that renouncing action was far worse than taking disciplined 
                  action (and was ultimately not possible in any case), so Oppenheimer 
                   rejected the ivory tower, and its illusion of remove, for the Manhattan 
                  Project.</p>
        <br><br>

          <div class="row">
            <div class="col-md-6">
            <p>______________________________________________________________________________</p>
                      <h2 class="strong">Why choose Yoga Tutor?</h2>
                      <p>______________________________________________________________________________</p>
                      <p class="lead">If you’re looking for a yoga vacation, but<br> not sure where to begin–we’ve got you covered.<br> We’ve searched all over the globe to.</p>
                    </div>

                     <div class="col-1 ">
                     <br>
                     <br> 
                     <img src="images/ab2.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     
                           
                     </div>
                      <div class="col-2 "> 
                        <br>
                     <br>
                     <img src="images/ab1.png" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     
                           
                     </div>
                      <div class="col-3 "> 
                        <br>
                     <br>
                     <img src="images/ab3.jpg" class="img-fluid w-100 h-auto" alt="..."><br><br>
                     
                           
                     </div>
          </div>
         
             <p>______________________________________________________________________________</p>
        <h5 class="section-title h1">OUR TEAM</h5>
         <p>______________________________________________________________________________</p>
        <div class="row">
            <div class="col-md-6 mt-4 ">
                       <div class="card">
                       <img src="images/nushraat.jpg" class="card-img-top" alt="Acro">
                                 <div class="card-body">
                                  <h5 class="card-title">Nushraat Jahan</h5>
                                 
                                  <p class="card-text">Institition:Ahshanullah Science &amp; 
                                  Technology</p>
                                   <p class="card-text">Department of CSE</p>
                                   <p class="card-text">Year &amp; Smester:3.1</p>
                                   <p class="card-text">ID:180104032</p>
                                    
                                  </div>
                                  </div>
                    </div>
             <div class="col-md-6 mt-4 ">
                       <div class="card">
                       <img src="images/nilufar.jpg" class="card-img-top" alt="prenatal">
                                 <div class="card-body">
                                  <h5 class="card-title">Nilufar Hossain</h5>
                                  <p class="card-text">Institition:Ahshanullah <br>Science &amp; 
                                  Technology</p>
                                   <p class="card-text">Department of CSE</p>
                                   <p class="card-text">Year &amp; Smester:3.1</p>
                                   <p class="card-text">ID:180104031</p>
                                    
                                  </div>

                        </div>

               </div>                    
            </div>
                      
        </div>
      </div>
       

</div>



<div class="footer">
                <br><br><br>
                <div class="container">
                    <div class="row">

                        <div class="foot col-md-3">
                        
                            <h3>About Us</h3>
                            <br>
                            <p><a href="About.php">Services</a></p>
                            <p><a href="About.php">Policy</a></p>
                            <p> <a href="About.php">Careers</a></p>
                            <p> <a href="About.php">Services</a></p>

                        </div>

                        <div class="foot col-md-3">
                            
                            <h3>Resouces</h3>
                            <br>
                            <p><a href="Yoga.php">Docs</a></p>
                            <p><a href="loggedinHomePage.php">Links</a></p>
                            <p> <a href="dashboard.php">Ebook</a></p>
                            <p> <a href="Register.php">Webiners</a></p>

                        </div>

                        <div class="foot col-md-3">
                            
                            <h3>Contact Us</h3>
                            <br>
                            <p><a href="Contactus.php">Help</a></p>
                            <p><a href="Contactus.php">Sales</a></p>
                            <p> <a href="Contactus.php">Advertise</a></p>
                            <p> <a href="Contactus.php">Help</a></p>

                        </div>
						
                        <div class="foot col-md-3">
							<hr style="height: 2px;">
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
					</div>
				</div>

            <div class="copyright">
                © Copyright 2021. All Rights Reserved
            </div>


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>  

</body>
</HTML>  

<?php
     exit();
}
 ?>


