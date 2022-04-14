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
    <title>WELCOME PAGE</title>
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
      <li><a href="./book_ticket.php">Book Ticket</a></li>
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
   </div>
 </nav>
    <center><h1>WELCOME</h1>
    <?=$_SESSION['email'];?><br><br><br>

    <div class = "Tour">
      <h1>Route info</h1><br>

    <form action="./verifyroute.php" method="post" >

      <label>FROM:</label>
      <select name ='from'>
        <option >SELECT PLACE</option>
        <?php
        include("./connect_database.php");
        $place_list = "select * from Places order by place_name asc";
        $place = mysqli_query($connect,$place_list);
        while($line= mysqli_fetch_assoc($place)){
          ?>
           <option value="<?=$line['place_name'];?>">
             <?=$line['place_name'];?>
           </option>
         <?php } ?>

   </select>
<br>
  <label>TO:</label>
  <select name ='to'>
    <option >SELECT PLACE</option>
    <?php
    $place_list = "select * from Places order by place_name asc";
    $place = mysqli_query($connect,$place_list);
    while($line= mysqli_fetch_assoc($place)){
      ?>
       <option value="<?=$line['place_name'];?>">
         <?=$line['place_name'];?>
       </option>
     <?php } ?>
  </select>
<br>
    <label >DATE:</label>
    <input type="date"  name="date"><br>
    <label>CLASS:</label>
  <select  name ='class'>
    <option >SELECT CLASS</option>
    <option value="all">All Classes</option>
    <option value="AC">AC</option>
    <option value="SHOVON">SHOVON</option>
    <option value="SNIGDHA">SNIGDHA</option>
    <option value="S_CHAIR">S_CHAIR</option>
  </select>
  <br>
    <input type="submit" name= "submit" value="Check"><br>
  </form>
</center>
  <br><br>
</div>

  </body>
</html>
