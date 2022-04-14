<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../source/Style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
      <li><a href="./contactus.php">Contact Us</a></li>
    </ul>
   </div>
 </nav>
 
		<div class="container">
			<h1>LOG IN</h1>
			<form name = "loginform" action = "./signin.php" method = "post">
				<input type="email" name="email" placeholder="E-mail"><br>
				<input type="password"name="password" placeholder="Password"><br><br>
				<input type="submit" name = 'login' value="Log In"><br><br>
				<h4>Don't have an account!</h4>
	<a  href="./registration.php">Create an account</a>
  </form>
</div>
  </body>
</html>
