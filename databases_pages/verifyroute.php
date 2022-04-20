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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Train Info</title>
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

    <center>
    <label>From:</label>
 <?=$_POST['from'];?>
 <label>To:</label>
 <?=$_POST['to'];?>
      <h1>Available Trains!</h1>
      <table>
        <thead>
          <tr>
            <th>trian_Id </th>
            <th>train_Name </th>
            <th>start_location </th>
            <th>end_location </th>
            <th>total_seats </th>
            <th>available_seat </th>
            <th>departure_time </th>
            <th>arrival_time </th>
            <th>price</th>
          </tr>
        </thead>

        <?php
                include('./connect_database.php');
                $fromplace = $_POST['from'];
                $toplace = $_POST ['to'];
                $view_route_query = "select * from train_information where start_location = '$fromplace' AND end_location = '$toplace'";
                $route_query = mysqli_query( $connect, $view_route_query);
                while ($row = mysqli_fetch_array($route_query)) {
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
                  <td><td><a href="./payment.php"><button type="button" name="bookticket">Purchase</button></a></td>
                  </td>
                  <?php
                  }
                  ?>
                </tr>
      </table><br><br>
      <h5><a href="./welcome.php"><button type="button" name="back">Back</button></a></h3>
      </center

  </body>
</html>
