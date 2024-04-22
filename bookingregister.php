<?php
$con=mysqli_connect('localhost','root','','food_db');

if(isset($_POST['name'])){
    $pname=$_POST['pname'];
    $size=$_POST['size'];
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $oname=$_POST['oname'];
    $number=$_POST['number'];
    $anumber=$_POST['anumber'];
    $address=$_POST['address'];
    $caddress=$_POST['caddress'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $payment=$_POST['payment'];

/* 
    if(empty($name)){
        $er1= "Enter user name";
        header("Location: homepage.php?er1=$er1");
        exit();
    }
    elseif(empty($number)){
        $er2= "Enter number";
        header("Location: homepage.php?er2=$er2");
        exit();
    }
    elseif(empty($address)){
        $er3= "Enter address";
        header("Location: homepage.php?er3=$er3");
        exit();
    }elseif(empty($password)){
        $er4= "Enter password";
        header("Location: homepage.php?er4=$er4");
        exit();
    } */
   /*  $s= "select * from allbooking where number='$number'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        $error = "User already exists";
        header("Location: homepage.php?error=$error");
        exit(); 
        echo "<script>alert('User already exists')</script>";
    }else{ */
        $reg="INSERT INTO allbooking(pname,size,user_id,name,oname,number,anumber,address,caddress,city,pincode,payment) VALUES ('$pname','$size','$user_id','$name','$oname','$number','$anumber','$address','$caddress','$city','$pincode','$payment')";
        mysqli_query($con,$reg);
        echo "<script>alert('Booking Successful!'); window.location='userdashboard.php';</script>";
        /* echo "<script> alert('Booking Successful!')</script>
        header("Location:usersearch.php");
        exit(); */ 
    }
/* } */
?>

