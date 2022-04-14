<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $user_id = $_GET['id'];
  $run_sql = "select * from passenger where passenger_id='$user_id'";
  $get_user = mysqli_query($connect, $run_sql);

  $row = mysqli_fetch_assoc($get_user);
?>
<center>
  <h1>Edit User Information</h1>
<form  action="./update_user.php?id=<?=$row['passenger_id'];?>" method="post">
  User Name : <input type="text" name="uname" value="<?=$row['passenger_name'];?>"><br><br>
  User Email : <input type="email" name="uemail" value="<?=$row['email'];?>"><br><br>
  User Phone Number : <input type="phone" name="phone_number" value="<?=$row['phone_number'];?>"><br><br>
  User Date of Birth : <input type="date" name="dob" value="<?=$row['date_of_birth'];?>"><br><br>
  User Address : <input type="textarea" name="address" value="<?=$row['address'];?>"><br><br>
  User Password : <input type="password" name="upass" value="<?=$row['password'];?>"><br><br>

  <input type="submit" name="update" value="Update">
</form>
</center>
