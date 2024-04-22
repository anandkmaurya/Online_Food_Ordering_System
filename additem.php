<?php
$con=mysqli_connect('localhost','root','','food_db');

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $largeprice=$_POST['largeprice'];
    $mediumprice=$_POST['mediumprice'];
    $smallprice=$_POST['smallprice'];
    $description=$_POST['description'];
    $image=$_POST['image'];

    if(empty($name)){
        $er1= "Enter Food-Item Name";
        header("Location: admindashboard.php?er1=$er1");
        exit();
    }
    elseif(empty($largeprice)){
        $er2= "Enter Food-Item Large Price";
        header("Location: admindashboard.php?er2=$er2");
        exit();
    }
    elseif(empty($mediumprice)){
        $er2= "Enter Food-Item Medium Price";
        header("Location: admindashboard.php?er2=$er2");
        exit();
    }
    elseif(empty($smallprice)){
        $er2= "Enter Food-Item Small Price";
        header("Location: admindashboard.php?er2=$er2");
        exit();
    }
    elseif(empty($description)){
        $er3= "Enter your full Food-Item Description";
        header("Location: admindashboard.php?er3=$er3");
        exit();
    }elseif(empty($image)){
        $er4= "Upload Your Food-Item Picture";
        header("Location: admindashboard.php?er4=$er4");
        exit();
    }
  
    $reg = "INSERT INTO newfooditem (name,largeprice,mediumprice,smallprice,description,image) VALUES ('$name','$largeprice','$mediumprice','$smallprice','$description','$image')";
    mysqli_query($con, $reg);
    echo "<script>alert('Add Food Item Successful!'); window.location='admindashboard.php';</script>";
  
    }

?>

