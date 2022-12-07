<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Student Records</title>
</head>
<body>


  <center><h1>REGISTRATION DETAILS</h1></center>
   
<table class="table container my-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">s_no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Pincode</th>
      
    </tr>
  </thead>
  <tbody>

<?php
$connection=mysqli_connect('localhost','root','','db_rishabh');

    $query = "select * from tbl_register";
   $data = mysqli_query($connection,$query);
   $total = mysqli_num_rows($data);

   if($total!=0){
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                    <td>".$result['s_no']."</td>
                    <td>".$result['firstname']."</td>
                    <td>".$result['lastname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['address']."</td>
                    
                    <td>".$result['state']."</td>
                    <td>".$result['country']."</td>
                    <td>".$result['pincode']."</td>
             </tr>";
    }
   }
?>

</tbody>
</table><br><br>

<center><h1>CONTACT US DETAILS</h1></center>
   
   <table class="table container my-5">
     <thead class="thead-dark">
       <tr>
         <th scope="col">s_no</th>
         <th scope="col">Name</th>
         <th scope="col">Phone</th>
         <th scope="col">Email</th>
         <th scope="col">MESSAGE</th>
         
       </tr>
     </thead>
     <tbody>
   
   <?php
   $connection=mysqli_connect('localhost','root','','db_rishabh');
   
       $query = "select * from tbl_contact";
      $data = mysqli_query($connection,$query);
      $total = mysqli_num_rows($data);
   
      if($total!=0){
       while($result=mysqli_fetch_assoc($data)){
           echo "<tr>
                       <td>".$result['s_no']."</td>
                       <td>".$result['name']."</td>
                       <td>".$result['phone']."</td>
                       <td>".$result['email']."</td>
                       <td>".$result['message']."</td>
                </tr>";
       }
      }
   
   
   
   
   
   ?>
   
   </tbody>
   </table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>