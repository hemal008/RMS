<?php

include("./connect_database.php");
if (isset($_POST['register'])){


 $username=$_POST['name'];
 $useremail=$_POST['email'];
 $phonenumber=$_POST['phone'];
 $phonenumber2 = $_POST['Confirmphone'];
 $dateofbirth=$_POST['DOB'];
 $usergender=$_POST['gender'];
 $useraddress=$_POST['Address'];
 $userpass=$_POST['Password'];
 $userpass2 = $_POST['Confirmpassword'];


if ($username == ''){
  echo "<script>alert('Please enter the name')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($useremail == ''){
  echo "<script>alert('Please enter the email')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($phonenumber == ''){
  echo "<script>alert('Please enter the phone number')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($phonenumber2 == ''){
  echo "<script>alert('Please enter the phone number')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($dateofbirth == ''){
  echo "<script>alert('Please enter the Date of Birth ')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($usergender == ''){
  echo "<script>alert('Please enter the gender'</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($useraddress == ''){
  echo "<script>alert('Please enter the address')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($userpass == ''){
  echo "<script>alert('Please enter the password')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($userpass2 == ''){
  echo "<script>alert('Please enter the password')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

if ($userpass != $userpass2 ){
  echo "<script>alert('Password doesn't match')</script>";
}

$check_email_query = "select * from passenger where email = '$useremail'";
$run_query = mysqli_query($connect, $check_email_query);
if(mysqli_num_rows($run_query) > 0){
  echo "<script>alert('Email $useremail already exist.Please enter another email')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();

}

$check_phone_number_query = "select * from passenger where phone_number = '$phonenumber'";
$result_query = mysqli_query($connect, $check_phone_number_query);
if(mysqli_num_rows($result_query) > 0){
  echo "<script>alert('Phone Number $phonenumber already exist.Please enter another number')</script>";
  echo "<script>window.open('./registration.php','_self')</script>";
  exit ();
}

$insert_tuple = "insert into passenger (passenger_name,email,date_of_birth,gender,phone_number,Address,password)
value ('$username', '$useremail', '$dateofbirth', '$usergender', '$phonenumber', '$useraddress', '$userpass')";

 if(mysqli_query($connect, $insert_tuple)){
   echo "<script>window.open('./login.php','_self')</script>";
 }
}
else{
  echo "<script>window.open('./registration.php','_self')</script>";
}

 ?>
