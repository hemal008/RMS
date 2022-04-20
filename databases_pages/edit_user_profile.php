<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login.php");
}
?>
<?php
include("./connect_database.php");
  $useremail=$_SESSION['email'];
  $run_update_sql = "select * from passenger where email = '$useremail' ";
  $get_user_update = mysqli_query($connect, $run_update_sql);

  $row = mysqli_fetch_assoc($get_user_update);
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
    <title>Update Profile</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li><a href="./book_ticket.php">Book Ticket</a></li>
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
   </div>
 </nav>

    <center>
    <h1>Edit User Information</h1>
  <form  action="./update_user_profile.php?id=<?=$row['passenger_id'];?>" method="post">
    User Name : <input type="text" name="uname" value="<?=$row['passenger_name'];?>"><br><br>
    User Email :<input type="email" name="uemail" value="<?=$row['email'];?>"><br><br>
    User Phone Number : <input type="phone" name="phone_number" value="<?=$row['phone_number'];?>"><br><br>
    User Date of Birth : <input type="date" name="dob" value="<?=$row['date_of_birth'];?>"><br><br>
    User Address : <input type="textarea" name="address" value="<?=$row['address'];?>"><br><br>
    User Password : <input type="password" name="upass" value="<?=$row['password'];?>"><br><br>

    <input type="submit" name="update" value="Update">
  </form>
  </center>

  </body>
</html>
