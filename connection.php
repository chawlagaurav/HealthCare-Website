<?php 
  error_reporting(0);
  $servername= "localhost";
  $username = "root";
  $password ="";
  $dbname ="appointment";

  $conn = mysqli_connect($servername, $username,$password, $dbname);
  if(!$conn){
  
    die("Error". mysqli_connect_error());  
  }
?>