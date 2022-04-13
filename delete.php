<?php
   include("connection.php");

   $id = $_GET['id'];

   $query = "DELETE FROM appointment WHERE id='$id'";

   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo "<script>alert('Appointment Deleted')</script>";
       ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/healthcare/login/display.php# " />
       <?php
   }
   else
   {
       echo "Failed to delete";
   }
?>