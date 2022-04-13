<html>
    <head>
        <title>
            Appointment Details
        </title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

            body
            {
                background-image: linear-gradient(#fcfcfd, #fcfafa );
                color: #6208d6;
                font-family: 'Poppins', sans-serif;
                text-align:center;
            }
            h2{
                margin-top:30px;
            }
            table{
                text-align:center;
                font-family: 'Poppins', sans-serif;
                width: 80%;
                border-spacing:20px;
            
            
                
                
            }
            th {
                  background-color: #010107;
                  color: #fcfcfd;
                  border-radius:20px;
                  border:0;
                
                  
               }
            td{
                height: 30px;
                vertical-align:center;
                border-radius:20px;
                background-color:#6248d6 ;
                color:#fcfcfd;
                border:0;
            }
            th,td{
                padding:5px;
                border-bottom: 1px solid #fcfcfd;
            }
            td a{
                text-decoration:none;
                color:#fcfcfd;
            }
            td a:hover{
                color: #010107;
            }
            tr td:hover 
            {
                background-color: #fcfcfd;
                color:#6248d6;
            }

        </style>
    </head>
    <body>
        <h2>Appointment Details</h2>
        
    </body>
</html>

<?php
 include("connection.php");
 
 $query = "SELECT * FROM appointment";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);


 


 if($total != 0)
 {  ?>

<center>
    <div style="overflow-x:auto;">
     <table cellspacing="2px" padding="100px"   >
         <tr>
         <th width="4%">ID</th>
         <th width="10%">Name</th>
         <th width="10%">Email</th>
         <th width="10%">Speciality</th>
         <th width="10%">Date</th>
         <th width="10%">Message</th>
         <th colspan="2" width="10%">Modify</th>
         </tr>
         

    
    



     <?php
     while( $result = mysqli_fetch_assoc($data) )
     {
        echo "<tr>
                  <td>".$result['id']."</td>
                  <td>".$result['name']."</td>
                  <td>".$result['email']."</td>
                  <td>".$result['subject']."</td>
                  <td>".$result['date']."</td>
                  <td>".$result['message']."</td>

                  <td><a href='update_appointment.php?id=$result[id]'>Update</a></td>
                  <td><a href='delete.php?id=$result[id]' onclick = 'return checkdelete()'>Delete</a></td>
              </tr>
             ";
     }
 }
 else
 {
     echo "No records";
 }
?>

</table>
</div>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are your sure to delete this ?');
    }
</script>

