<?php
  $host_name = 'db5000189512.hosting-data.io';
  $database = 'dbs184355';
  $user_name = 'dbu301708';
  $password = 'Patito123-';
  $hola = 'hola';
  $mysqli = new mysqli($host_name,$user_name, $password, $database);
  
  if(mysqli_connect_errno()){
	  echo 'no jalo', mysqli_connect_error();
  }  
?>