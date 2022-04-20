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
    <link rel="stylesheet" href="../source/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>BOOK TICKET</title>
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
    <h1>Book Ticket</h1>
    <form action="./verifyticket.php" method="post">

    <label ><b>Name:</b></label>
    <input type="text" name="name" placeholder="Enter Name"><br>

    <label >Start Location:</label>
    <input type="text" name="startlocation" placeholder="place"><br>

    <label >End Location:</label>
    <input type="text" name="endlocation" placeholder="place"><br>

    <label > Journey Date: </label>
    <input type="date"  name="jdate" ><br><br>

    <label >Number of passenger:</label>
    <input type="number" name="numberofpassenger"><br><br>


    <input type="submit" name= "book" value="Book Ticket"><br>
  </form>
</div>

  <h3><a href="./welcome.php"><button type="button" name="back">Back</button></a></h3>
</center>

  </body>
</html>
