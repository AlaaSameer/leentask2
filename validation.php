<?php
session_start();


$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name =isset( $_POST['user']) ? $_POST['user']:'';
$pass = isset($_POST['password'])? $_POST['password']:'';
$mail = isset ($_POST['email'])? $_POST['email']:'';
$phonenumber= isset($_POST['phonenumber'])? $_POST['phonenumber']:'';
$s = "select * from usertable where name='$name' && password='$pass' ";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
   header ('location:home.php');
}
else{
   header('location:login.php');
}
?>