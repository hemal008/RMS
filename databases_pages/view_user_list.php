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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>USER'S LIST</title>
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
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./admin_logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
    <center>
      <h1>All Usser's</h1>
      <table>
        <thead>
          <tr>
            <th>Passenger_Id</th>
            <th>Passenger_Name</th>
            <th>Email</th>
            <th>Date of birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Password</th>
          </tr>
        </thead>

        <?php
                include('./connect_database.php');
                $view_users_query = "select * from passenger";
                $run = mysqli_query( $connect, $view_users_query);
                while ($row = mysqli_fetch_array($run)) {
                    $user_id      =  $row[0];
                    $user_name    =  $row[1];
                    $user_email   =  $row[2];
                    $user_DOB     =  $row[3];
                    $user_gender  =  $row[4];
                    $user_address =  $row[5];
                    $user_phone   =  $row[6];
                    $user_pass    =  $row[7];

                ?>

                <tr>
                  <td><?=$user_id;?></td>
                  <td><?=$user_name;?></td>
                  <td><?=$user_email;?></td>
                  <td><?=$user_DOB;?></td>
                  <td><?=$user_gender;?></td>
                  <td><?=$user_address;?></td>
                  <td><?=$user_phone;?></td>
                  <td><?=$user_pass;?></td>
                  <td><a href="./edit_user.php?id=<?=$user_id;?>"><button type="button" name="edit">Edit</button></a></td>

                  <td><a href="./delete_user.php?id=<?=$user_id;?>"><button onclick="return confirm('Are you sure?');"> Delete </button></a>
          </td>

                  <?php
                  }
                  ?>
                </tr>
      </table><br><br><br>
      <h3><a href="./admin_home.php"><button type="button" name="back">Back</button></a></h3>
      </center
  </body>
</html>
