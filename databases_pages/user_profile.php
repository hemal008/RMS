<?php
session_start();
if (!isset($_SESSION['email']))
  header("Location: ./login.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../source/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Profile</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./welcome.php">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="./book_ticket.php">Book Ticket</a></li>
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
   </div>
 </nav>
    <center>
      <h1>Edit Your Information!</h1>
      <?php
      include('./connect_database.php');
      $useremail=$_SESSION['email'];
      $edit_users_query = "select * from passenger where email = '$useremail'";
      $edit_run = mysqli_query( $connect, $edit_users_query);
      while ($row = mysqli_fetch_array($edit_run)) {
          $user_id      =  $row[0];
          $user_name    =  $row[1];
          $user_email   =  $row[2];
          $user_DOB     =  $row[3];
          $user_gender  =  $row[4];
          $user_address =  $row[5];
          $user_phone   =  $row[6];
          $user_pass    =  $row[7];
          ?>
          <?php
        }
           ?>
    <label for="Username">User Name:</label>
    <?=$user_name;?><br><br>
    <label for="Useremail">User Email:</label>
    <?=$user_email;?><br><br>
    <label for="Userphone">User Phone:</label>
    <?=$user_phone;?><br><br>
    <label for="Userdob">User Date of Birth:</label>
    <?=$user_DOB;?><br><br>
    <label for="Useraddress">User Address:</label>
    <?=$user_address;?><br><br>
    <label for="Userpass">User Password:</label>
    <?=$user_pass;?><br><br>

    <h4><a href="./edit_user_profile.php?email=<?=$user_email;?>"><button>Edit Profile</button></a></h4>
    <br><br><br>
    <h5><a href="./welcome.php"><button type="button" name="back">Back</button></a></h5>

  </center>
  </body>
</html>
