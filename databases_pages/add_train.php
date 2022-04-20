<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
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
     <title>NEW TRAIN</title>
   </head>
   <body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./admin_home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./admin_logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
     <center>
     <div class = " registration">
       <h1>Add New Train!</h1>

     <form action="./verifytrain.php" method="post" >

     <label >Train ID:</label>
     <input type="number" name="trainid" placeholder="Enter ID"><br><br>

     <label >Train Name:</label>
     <input type="text" name="trainname" placeholder="Enter Train Name"><br><br>

     <label >Start Location: </label>
     <input type="text"  name="startplace" placeholder="Enter place"><br><br>

     <label >End Location:</label>
     <input type="text"  name="endplace" placeholder=" Enter place"><br><br>

     <label > Total Seats:</label>
     <input type="number"  name="totalseat"><br><br>

     <label >Available Seats:</label>
     <input type="number"  name="availableseat"><br><br>

     <label >Departure Time</label>
     <input type="time" name="departuretime"><br><br>

     <label >Arrival Time</label>
     <input type="time" name="arrivaltime"><br><br>
     <label >Price</label>
     <input type="decimal" name="price"><br><br>
     <input type="submit" name= "add" value="Add Train"><br>
     </div>
     </form>
     <br><h4><a href="./admin_home.php"><button type="button" name="back">Back</button></a></h4>
 </center>
   </body>
 </html>
