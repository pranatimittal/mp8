<?php
  define('_HOST_NAME','localhost');
  define('_DATABASE_NAME','mobileed_ERP');
  define('_DATABASE_USER_NAME','mobileed_Pranati');
  define('_DATABASE_PASSWORD','Pranati@123');
$con = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
   if($con->connect_errno)
   {
       die("ERROR : -> ".$con->connect_error);
   }
?>
