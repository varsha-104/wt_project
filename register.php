<?php
$connection = mysqli_connect('localhost','root','','db_rishabh');

   if(isset($_POST['send'])){
      $fname = $_POST['First_Name'];
      $lname = $_POST['Last_Name'];
      $email = $_POST['email'];
      $phone = $_POST['mobile'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $state = $_POST['state'];
      $country = $_POST['country'];
      $pincode = $_POST['pincode'];

      $request = " insert into tbl_register(firstname, lastname, email, phone ,gender, address, state, country, pincode) values('$fname', '$lname', '$email', '$phone' ,'$gender', '$address', '$state', '$country', '$pincode') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>