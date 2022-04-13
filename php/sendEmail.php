<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $date = $_POST['date'];
  $message = $_POST['message'];


  $conn =new mysqli('localhost','root','','appointment');
  if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into appointment(name,email,subject,date,message)
          values(?,?,?,?,?)");
      $stmt->bind_param("sssss",$name,$email,$subject,$date,$message);
      $stmt->execute();
      echo '<h3 style="color:#6208d6">Your appointment is booked. We will get back to you soon.</h3>';
      $stmt->close();
      $conn->close();
  }
?>