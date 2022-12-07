<?php
$connection = mysqli_connect('localhost','root','','db_rishabh');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      
      

      $request = " insert into tbl_contact(name,phone,email,message) values('$name', '$phone', '$email', '$message') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>