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
    <title>Review</title>
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
      <h1>User Reviews!</h1>
      <table>
        <thead>
          <tr>
            <th>User_Name</th>
            <th>Review</th>
          </tr>
        </thead>

        <?php
                include('./connect_database.php');
                $view_reviews_query = "select * from user_review";
                $review = mysqli_query( $connect, $view_reviews_query);
                while ($row = mysqli_fetch_array($review)) {
                    $user_name               =  $row[0];
                    $user_review             =  $row[1];

                ?>

                <tr>
                  <td><?=$user_name;?></td>
                  <td><?=$user_review;?></td>
                  <?php
                  }
                  ?>
                </tr>
      </table><br><br><br>
      <h3><a href="./admin_home.php"><button type="button" name="back">Back</button></a></h3>
      </center

  </body>
</html>