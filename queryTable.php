<?php 
session_start();

include "include/connectToDB.php";
$ustat = $_SESSION['status'];
if (isset($_SESSION['uId']) && isset($_SESSION['user_name']) && $ustat == 2) {
         
 

  ?>  
<!Doctype HTML>
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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    body{
    
        background: -webkit-linear-gradient(left,#c066a4,#e4bad4);
    }
    </style>
<title>Yoga Form</title>

</head>

<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="userProfile.php">User Profile</a></li>
            <li class="breadcrumb-item"><a href="userTable.php">User Details</a></li>
        </ol>
    </nav>
    <div class="container">
        <table class="table table-striped table-dark table-hover">
            <tbody>
            <thead>
                <tr>
                <th scope="col">Query No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Message</th>
                <th scope="col">query Time</th>
                </tr>
            </thead>
            <?php

                $sql = "SELECT * FROM contactus ;";

                $result = mysqli_query($link,$sql) or mysqli_error($link);  
                while($row = mysqli_fetch_assoc($result)){


                    echo '<tr>

                        <td>' . $row['id'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>'. $row['email'] . '</td>
                        <td>' .$row['phone'] . '</td>
                        <td>' . $row['message'] .'</td>
                        <td>'. $row['querytime'].'</td>
                    </tr> ';
                }
            

            ?>
                
            </tbody>
        </table>
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