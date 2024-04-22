<?php
                    error_reporting(0);
                    session_start();/* 
                    if (isset($_SESSION['name'])) {
                        echo "Welcome, " . $_SESSION['name'];
                        }else{
                            header("Location: homepage.php");
                        }  */                 
                        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminhomestyle.css">
    <title>Admin Pannel</title>
</head>
<body>
    <div class="container">
         <nav class="navbar">
              <div class="logo"><img src="image/logo.png">
                    <h1>Admin Pannel</h1>
                    <a href="adminlogout.php">Logout</a>
                </div>
         </nav>
    </div>
    <div class="section">
        <div class="sidebar">
            <ul>
                <li><a href="bookingrequest.php">Booking Request</a></li>
                <li><a href="#detail" onclick="openDetailBox()" >User Details</a></li>
                <li><a href="#item" onclick="openItemBox()">Add Food Item</a></li>
                <li><a href="#showitem" onclick="openshowItemBox()">View Food Item</a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                
            </ul>
        </div>
        <div class="content">
<!------------------------------------------- Add Food item  Detail Box ---------------------------------------------------->
<div class="item" id="item">
    <img src="image/cross.svg" onclick="closeItemBox()">
        <?php
            $error = isset($_GET['error']) ? $_GET['error'] : ''; // Retrieve the error parameter from the URL
            echo $error;
        ?>
    <form action="additem.php" method="POST">
        <h2>Add New Food Item</h2>
            <input type="text" id="name" name="name" placeholder="Enter Food-Item Name" />
        <?php
            $er1 = isset($_GET['er1']) ? $_GET['er1'] : ''; // Retrieve the error parameter from the URL
            echo $er1;
        ?>
        <input type="text" name="largeprice" placeholder="Enter Food-Item Large Price" >
        <?php
            $er2 = isset($_GET['er2']) ? $_GET['er2'] : ''; // Retrieve the error parameter from the URL
            echo $er2;
        ?>
        <input type="text" name="mediumprice" placeholder="Enter Food-Item Medium Price" >
        <?php
            $er2 = isset($_GET['er2']) ? $_GET['er2'] : ''; // Retrieve the error parameter from the URL
            echo $er2;
        ?>
        <input type="text" name="smallprice" placeholder="Enter Food-Item Small Price" >
        <?php
            $er2 = isset($_GET['er2']) ? $_GET['er2'] : ''; // Retrieve the error parameter from the URL
            echo $er2;
        ?>
        <input type="textarea" id="description" name="description" placeholder="Enter your full Food-Item Description" > 
        <?php
            $er3 = isset($_GET['er3']) ? $_GET['er3'] : ''; // Retrieve the error parameter from the URL
            echo $er3;
        ?>
        <input type="file" name="image" placeholder="Upload Your Food-Item Picture">
        <?php
            $er4 = isset($_GET['er4']) ? $_GET['er4'] : ''; // Retrieve the error parameter from the URL
                  echo $er4;
                 ?>
              <button type="submit">Add Food Item</button>
           </form>
        </div> 


<!---------------------------------------------- Add New Food Item Part ----------------------------------------------> 
<div class="showitem" id="showitem">
      <img src="image/cross.svg" onclick="closeshowItemBox()">
        <?php
          $con=mysqli_connect('localhost','root','','food_db');
           /*  if($con){
             echo "connected";
              } */
          $query="SELECT * FROM newfooditem";
            $run=mysqli_query($con,$query);
        ?>
    <h1>All Food Item Details</h1>
<?php
$query="SELECT * FROM newfooditem";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){
	$id=$row['id'];
?>
<div class="card-outer">
<div class="card">
<img id="card-img" src="image/<?php echo $row['image']; ?>" >
<div class="order">
                  <h4><?php echo $row['name']; ?><br> <span><?php echo $row['largeprice']; ?>/-</span></h4>
                  <br>
                <select>
                    <option value="large"><a>Large</a></option>
                    <option value="medium"><a>Medium</a></option>
                    <option value="small"><a>Small</a></option>
                </select>
                  <!-- <button class="btn">Add To Cart</button> -->
            </div>
        </div>
        <div class="card-inner">
            <h1>Description</h1>
        <p><?php  echo $row['description']; ?></P>
        </div>
        </div>
<?php } ?>
</div>


<!----------------------------------------------- User Detail Box --------------------------------------------->
            <div class="detail" id="detail">
                <img src="image/cross.svg" onclick="closeDetailsBox()">
       <?php
          $con=mysqli_connect('localhost','root','','food_db');
          /*   if($con){
             echo "connected";
              } */
          $query="SELECT * FROM newuser";
            $run=mysqli_query($con,$query);
        ?>
<table>
    <h1>All User Details</h1>
<tr>
<td><a>id</a></td>
<td><a>Name</a></td>
<td><a>Number</a></td>
<td><a>Address</a></td>
<td><a>Password</a></td>
<td><a>Action</a></td>
</tr>
<?php
$query="SELECT * FROM newuser";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){
	$id=$row['id'];
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['number']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><!-- <a href="edit_delete.php?action=edit&id=<?php echo $id; ?>">Edit</a> -->
|
   <form method="POST" action="">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
     </form></td>
</tr>
<?php } ?>
</table>   
</div>



</div>
    </div>




<script>
    let detail = document.getElementById("detail");
    let item = document.getElementById("item");
    let showitem = document.getElementById("showitem");

    function openDetailBox(){
    detail.classList.add("open-detail");
    }
    function closeDetailsBox(){
    detail.classList.remove("open-detail");
    }

    function openItemBox(){
    item.classList.add("open-item");
    }
    function closeItemBox(){
    item.classList.remove("open-item");
    }


    function openshowItemBox(){
    showitem.classList.add("open-showitem");
    }
    function closeshowItemBox(){
        showitem.classList.remove("open-showitem");
    }
    </script>

</body>
</html>
<?php
// Handle the delete action on the same page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $deleteId = $_POST['id'];

        // Perform the delete operation in the database
        $deleteQuery = "DELETE FROM newuser WHERE id = '$deleteId'";
        mysqli_query($con, $deleteQuery);

        // Redirect to the same page after deletion
        // header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}
?>