<?php
  $host_name = 'db5000235236.hosting-data.io';
  $database = 'dbs229774';
  $user_name = 'dbu74896';
  $password = 'Patito123-';
  $hola = 'hola';
  $mysqli = new mysqli($host_name,$user_name, $password, $database);
  
  if(mysqli_connect_errno()){
	  echo 'no jalo', mysqli_connect_error();
  }  
?>