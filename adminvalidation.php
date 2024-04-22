<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'food_db');
$number=$_POST['number'];
$password=$_POST['password'];

$s="select * from admin where number='$number' && password='$password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['number'] = $number;
    header('location:admindashboard.php');
}else{
    echo "<script>alert('Invalid Username or Password')</script>";
    header("refresh:0,url='homepage.php'");
}