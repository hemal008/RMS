<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../source/admin2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Mobile Banking</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./welcome.php">Home</a></li>
      <li><a href="./user_profile.php">Profile</a></li>
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
   </div>
 </nav>
    <center>
    <div class="ticket">
    <h1>Mobile banking System!</h1><br><br>
    <form action="./verifypayment.php" method="post">

    <label ><b>Phone Number:</b></label>
    <input type="number" name="pnumber" placeholder="Enter Phone Number"><br><br>

    <label >Mobile Banking Type: </label>
    <label >Bkash </label><input type="radio"  name="mbsystem" value = "bkash">
    <label >Rocket </label><input type="radio"  name="mbsystem" value = "rocket">
    <label >Nagad </label><input type="radio"  name="mbsystem" value = "nagad"><br><br>

    <label >Transaction Id:</label>
    <input type="text" name="Tid" placeholder="Transaction Id"><br><br>


    <input type="submit" name= "confirm" value="Confirm"><br><br>
  </form>
</div>
<br>
  <h3><a href="./payment.php"><button type="button" name="back">Back</button></a></h3>
</center>

  </body>
</html>
