<?php
$con=mysqli_connect('localhost','root','','food_db');

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $password=$_POST['password'];

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
    }
    $s= "select * from newuser where number='$number'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
       /*  $error = "User already exists";
        header("Location: homepage.php?error=$error");
         */
        echo "<script>alert('Number is already Exists '); window.location='index.php#user-lg';</script>";
        exit(); 
    }else{
        $reg="INSERT INTO newuser(name,number,address,password) VALUES ('$name','$number','$address','$password')";
        mysqli_query($con,$reg);
        echo "<script>alert('Your Registration  Successful!'); window.location='index.php#user-lg';</script>";
    }
}
?>

