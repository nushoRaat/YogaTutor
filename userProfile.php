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

            <?php if($userstat == '2'){?>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="userTable.php">User Details</a></li>
                <li class="breadcrumb-item"><a href="queryTable.php">Contact Us Queries</a></li>
            </ol>
            </nav><?php }?>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5>
                                <?php echo $userfullname?>
                                </h5>
                                <h6><?php if($userstat == '2'){?>
                                    Admin
                                    <?php }else{?>
                                    General Member<?php } ?>
                                </h6>
                                <p class="proile-rating">Joined Us : <span><?php echo $regtime?></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="editProfile.php"><input type="button" class="profile-edit-btn" name="editprofile" value="Edit Profile"/></a>
                </div>
                <div class="col-md-2">
                    <a href="loggedinHomePage.php"><input type="button" class="profile-edit-btn" name="homebtn" value="Home"/></a>
                </div>

            </div>

            <div class="row">
            
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                        <p><?php echo $username?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $userfullname?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $useremail?></p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p><?php echo $userbio; ?></p>
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
}else{
     header("Location: logincss.php");
     exit();
}
 ?>