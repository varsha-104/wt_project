<?php
$uname=$_POST['uname'];
$password=$_POST['password'];
if(isset($_POST['send'])){
    if($uname=="adm_varsha" && $password=="12345"){
        header('location:search.php'); 
    }
    else{
        echo "<script type='text/javascript'>alert(\"invalid Username or Password\")</script>";
        header('location:adminlogin.php'); 
    }
}
?>