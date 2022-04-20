<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../source/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CONTACT US</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li><a href="./admin_login.php">Admin</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
   </div>
 </nav>
  </div>
<center>
  <div class = "contact">
    <h1>CONTACT US</h1>
    <h2>For Refund Purposes</h2>
    <p>Please email us including the station name from where you want travel.</p>
    <h2>For Technical Support</h2>
    Email: abcdef1234@gmail.com<br>
    Phone Number:01406849359

    <br><br><br>
<form action = "./checkreview.php" method = "post">
    <label>Username:</label>
    <input type="text" name="name" placeholder="Name"><br>
    <label>Review:</label>
    <input type="textarea" name="review" placeholder="Give Your Review"><br><br>
    <input type="submit" name="submit"><br>
    
<br>
    <h5><a href="./welcome.php"><button type="button" name="back">Back</button></a></h5>

  </div>
</center>

  </body>
</html>
