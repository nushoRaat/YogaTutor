<?php 
session_start();

include "include/connectToDB.php";
if (isset($_SESSION['uId']) && isset($_SESSION['user_name'])) {
    $uni = $_SESSION['uId'];
    //print_r ($uni);

    $sql = "SELECT * FROM user WHERE uId = '$uni';";

    $result = mysqli_query($link,$sql) or mysqli_error($link);

//$row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result)){

        $userfullname = $row['Name'];
        $username = $row['user_name'];
        $useremail = $row['email'];
        $regtime = $row['created_date'];
        $userstat = $row['status'];
        $userbio = $row['bio'];
    }
    

//$noOfrows = mysqli_num_rows($result);

 ?>
<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="css/userprofilestylesheet.css"/>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>yoga Form</title>

</head>
<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">

                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                <?php echo $userfullname?>
                                </h5>
                                <h6>
                                    General Member
                                </h6>
                                <p class="proile-rating">Joined Us : <span><?php echo $regtime?></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
               

            </div>

            <div class="row">
                

                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                    <form action="" method="post">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                            <?php if (isset($_GET['error'])) { ?>
     		                    <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <?php if (empty($_GET['username']) ) { ?>
                                        <input type="text" name="username" value="<?php echo $username;  ?>" class="from-control px-5 "><br>
                                    <?php   }else{?>
                                        <input type="text" name="username" value="<?php echo $username;  ?>" class="from-control px-5 "><br>
                                        <?php }?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <?php if (empty($_GET['userFullName'])) { ?>
                                        <input type="text" name=" userFullName" value="<?php echo $userfullname; ?>" class="from-control px-5 "><br>
                                    <?php }else{ ?>
                                        <input type="text" name=" userFullName" value="<?php echo $userfullname?> " class="from-control px-5 "><br>
                                        <?php }?>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                <?php if (empty($_GET['usermail'])) { ?>
                                    <input type="text" name="usermail" value="<?php echo $useremail;?> " class="from-control px-5 "><br>
                                    <?php  }else{ ?>
                                        <input type="text" name="usermail" value="<?php echo $useremail;?> <?php //echo $_GET['usermail']; ?>" class="from-control px-5 "><br>
                                        <?php }?> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <?php if (empty($_GET['userbio'])) { ?>
                                    <textarea name="userbio" class="from-control px-5 "><?php echo $userbio; ?></textarea>
                                <?php  }else{ ?><textarea name="userbio"  class="from-control px-5 "></textarea>
                                    <?php }?>
                            </div>
                        </div>
                                    <br><br><br>
                        </form>
                        <div class="row">
                            <div class="col-md-6">
                                    <input type="submit" class="profile-edit-btn" name="updateup" value="Update Profile"/>
                            </div>  
                            <div class="col-md-6">
                                    <a href="userProfile.php"><input type="button" class="profile-edit-btn" name="up" value="User Profile"/></a>
                            </div> 
                        </div>        
        
                    </div>
                </div>
            </div>
        </div>
        </form>           
    </div>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>  

</body>
</HTML>   

<?php 
    if(isset($_POST["updateup"])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
     
         $un = validate($_POST['username']);
         $ufn = validate($_POST['userFullName']);
         $um = validate($_POST['usermail']);
         $ubio = validate($_POST['userbio']);

        date_default_timezone_set('Asia/Dhaka');
	    $currentTime = date('Y-m-d H:i:s');
        if (empty($un)) {

            header("Location: editProfile.php?error=User Name is required&");
                exit();
        }
        else if(empty($ufn)){
            header("Location: editProfile.php?error=Name is required&");
            exit();
        }
    
        else if(empty($um)){
            header("Location: editProfile.php?error=Name is required&");
            exit();
        }
    
        else{

            $sql1 = "SELECT * FROM user WHERE user_name='$un' ";
			$result = mysqli_query($link, $sql1);

		    if (mysqli_num_rows($result) > 1) {
				header("Location: editProfile.php?error=The username is taken try another&");
				exit();
			}
			else {

                $sql2 = "UPDATE  user SET user_name = '$un',email = '$um', Name = '$ufn',bio = '$ubio', updated_date = '$currentTime' WHERE user.uId = '$uni' ";

                $result2 = mysqli_query($link, $sql2);
            }
        }
            
    /*}
    else{
        header("Location: editProfile.php?error=Button didnt work");
                exit();
    }*/

}

}
else{
     header("Location: logincss.php");
     exit();
}
