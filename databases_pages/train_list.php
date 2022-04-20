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
    <title>TRAIN LIST</title>
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
      <div class = "trainlist">
      <h1>All Train's List</h1>
      <table>
        <thead>
          <tr>
            <th>trian_Id</th>
            <th>train_Name</th>
            <th>start_location</th>
            <th>end_location</th>
            <th>total_seats</th>
            <th>available_seat</th>
            <th>departure_time</th>
            <th>arrival_time</th>
            <th>price</th>
          </tr>
        </thead>

        <?php
                include('./connect_database.php');
                $view_trains_query = "select * from train_Information";
                $train = mysqli_query( $connect, $view_trains_query);
                while ($row = mysqli_fetch_array($train)) {
                    $tr_id               =  $row[0];
                    $tr_name             =  $row[1];
                    $tr_start            =  $row[2];
                    $tr_end              =  $row[3];
                    $tr_total_seats      =  $row[4];
                    $tr_available_seats  =  $row[5];
                    $tr_departure_time   =  $row[6];
                    $tr_arrival_time     =  $row[7];
                    $tr_seat_price       =  $row[8];

                ?>

                <tr>
                  <td><?=$tr_id;?></td>
                  <td><?=$tr_name;?></td>
                  <td><?=$tr_start;?></td>
                  <td><?=$tr_end;?></td>
                  <td><?=$tr_total_seats;?></td>
                  <td><?=$tr_available_seats;?></td>
                  <td><?=$tr_departure_time;?></td>
                  <td><?=$tr_arrival_time;?></td>
                  <td><?=$tr_seat_price;?></td>
                  <td><a href="./edit_train.php?id=<?=$tr_id;?>"><button type="button" name="button">Edit</button></a></td>

                  <td><a href="./delete_train.php?id=<?=$tr_id;?>"><button onclick="return confirm('Are you sure?');"> Delete </button></a>
          </td>

                  <?php
                  }
                  ?>
                </tr>
      </table><br><br><br>
      <h3><a href="./admin_home.php"><button type="button" name="back">Back</button></a></h3>
      </center>
    </div>
  </body>
</html>
