<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../source/adminstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </style>
    <title>LOG IN</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
    </ul>
   </div>
 </nav>
		<center>
		<div class="Admin">
			<h1>Administrator Log In</h1>
			<form action = "./Admin_Signin.php" method = "post">
				<input type="text" name="admin_name" placeholder="admin"><br>
				<input type="password"name="pass" placeholder="password"><br><br>
				<input type="submit" name = 'Admin_login' value="Log In"><br><br>

		</div>
 </form>
</center>
  </body>
</html>
