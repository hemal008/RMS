<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $tr_id = $_GET['id'];
  $train_sql = "select * from train_information where train_id='$tr_id'";
  $get_train = mysqli_query($connect, $train_sql);

  $row = mysqli_fetch_assoc($get_train);
?>
<center>
  <h1>Edit Train Information</h1>
<form  action="./update_train.php?id=<?=$row['train_id'];?>" method="post">
  Train Name : <input type="text" name="trname" value="<?=$row['train_name'];?>"><br><br>
  Start Place : <input type="text" name="startplace" value="<?=$row['start_location'];?>"><br><br>
  End Place : <input type="text" name="endplace" value="<?=$row['end_location'];?>"><br><br>
  Total Number Of Seats : <input type="number" name="totalseat" value="<?=$row['total_seats'];?>"><br><br>
  Available Seats : <input type="number" name="availableseat" value="<?=$row['total_available_seats'];?>"><br><br>
  Departure Time : <input type="time" name="time" value="<?=$row['departure_time'];?>"><br><br>
  Arrival Time : <input type="time" name="arvtime" value="<?=$row['arrival_time'];?>"><br><br>
  Price : <input type="decimal" name="pri" value="<?=$row['price'];?>"><br><br>

  <input type="submit" name="update" value="Update">
</form>
</center>
