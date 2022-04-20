<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "railway_management_system";

   $connect =  mysqli_connect($db_server, $db_user, $db_pass, $db_name);
   if (!$connect) {
     die("Connection Failed! : ".mysqli_connect_error());
   }

?>
