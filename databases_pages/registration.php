<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CREATE ACCOUNT</title>
  </head>
  <body><center>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
   </div>
 </nav>

    <div class = "registration">
      <h1>Create Account</h1>

    <form action="./SignUp.php" method="post" >

    <label ><b>Name:</b></label>
    <input type="text" name="name" placeholder="Enter Name"><br><br>

    <label >Email:</label>
    <input type="email" name="email" placeholder="Email address"><br><br>

    <label > Phone Number: </label>
    <input type="phone"  name="phone" placeholder="Phone Numeber"><br><br>

    <label >Confirm phone:</label>
    <input type="phone"  name="Confirmphone" placeholder="Re Enter Phone Number"><br><br>

    <label > Date of Birth:</label>
    <input type="date"  name="DOB" placeholder="Enter Date of Birth"><br><br>

    <label >Gender: </label>
    <label >Female </label><input type="radio"  name="gender" value = "Female">
    <label >Male </label><input type="radio"  name="gender" value = "Male">
    <label >Other </label><input type="radio"  name="gender" value = "Other"><br><br>

    <label >Address:</label>
    <input type="textarea"  name="Address" placeholder="Enter Address"><br><br>

    <label >Password:</label>
    <input type="password" name="Password" placeholder="Enter Password"><br><br>

    <label >Confirm password:</label>
    <input type="password"  name="Confirmpassword" placeholder="Re-Enter Password"><br><br>
    <input type="submit" name= "register" value="Submit"> Already Registered?<a  href="./login.php">Log In</a>
    </div>
    </form>
</center>
  </body>
</html>
