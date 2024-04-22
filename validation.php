<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'food_db');
$number=$_POST['number'];
$password=$_POST['password'];

$s="select * from newuser where number='$number' && password='$password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['number'] = $number;
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['address'] = $row['address'];

    header('location:userdashboard.php');
}else{
    echo "<script>alert('Invalid Username or Password')</script>";
    header("refresh:0,url='index.php#user-lg'");
}