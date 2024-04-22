<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/userstyle.css">
</head>
<body >
    <div class="container" >
        <nav class="navbar">
            <div class="logo"><img src="image/logo.png"></div>
            <div class="right">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a>
                    <?php
                    error_reporting(0);
                    session_start();
                    if (isset($_SESSION['name'])) {
                        echo "Welcome, " . $_SESSION['name'];
                        }else{
                            header("Location: homepage.php");
                        }                  
                        ?>
                </a></li>
                <li></li>
                <img  src="image/profile.jpeg" onclick="boxBtnup()">
            </ul>
            <div class="box" id="boxbtn">
                <img src="image/cut.png" onclick="boxBtndown()">
            <?php
                    error_reporting(0);
                    session_start();
                    if (isset($_SESSION['name'])) {
                    ?>
                    <h2>Hi,</h2>
                      <p > <?php echo  $_SESSION['name']; ?> </p>
                     
                        <h4 > <?php echo  $_SESSION['number']; ?> </h4>
                        <?php
                        }else{
                            header("Location: homepage.php");
                        }                  
                ?> 
                <div class="button">
                <a href="myorder.php">My Order</a>  
                <a href="logout.php">Logout</a>  
                </div>
            </div>
            </div>
        </nav>
        <div class="search">
        <form class="search"  method="POST" action="usersearch.php">
            <input type="text" name="search_data" id="search_data"  placeholder="search your  faviourite food" >
            <button type="text" ><img src="image/search.png" alt=""></button>
        </form>
        </div>
        <div class="popup" id="popup">
            <img src="image/cut.png" onclick="closePopup()">
            <form action="validation.php" method="POST">
            <h2>Login Here</h2>
            <input type="text" name="number" placeholder="Phone Number" >
            <input type="password" name="password" placeholder="enter your password">
            <p>New User <a href="">Register</a></p>
            <button type="submit" >Login</button>
</form>
        </div> 
        <div class="popup" id="popitup">
            <img src="image/cut.png" onclick="Popupdown()">
            <?php
                $error = isset($_GET['error']) ? $_GET['error'] : ''; // Retrieve the error parameter from the URL
                echo $error;
            ?>

            <form action="register.php" method="POST">
        <h2>Register Here</h2>
        <input type="text" id="name" name="name" placeholder="enter your name" />
        <?php
            $er1 = isset($_GET['er1']) ? $_GET['er1'] : ''; // Retrieve the error parameter from the URL
            echo $er1;
        ?>
        <br />
        <input type="text" name="number" placeholder="Phone Number" >
        <?php
            $er2 = isset($_GET['er2']) ? $_GET['er2'] : ''; // Retrieve the error parameter from the URL
            echo $er2;
        ?>
        <input type="textarea" id="address" name="address" placeholder="enter your full address" > 
        <?php
            $er3 = isset($_GET['er3']) ? $_GET['er3'] : ''; // Retrieve the error parameter from the URL
            echo $er3;
        ?>
        <input type="password" name="password" placeholder="create your  password">
        <?php
            $er4 = isset($_GET['er4']) ? $_GET['er4'] : ''; // Retrieve the error parameter from the URL
            echo $er4;
        ?>
        <p>Allready have a account <a href="">Login Here</a></p>
        <button type="submit">Register</button>
    </form>
        </div> 

       <!-----------------------------  Booking Item Page  -------------------------------------->
  
<!-------------------------food section---------------------------------------------------->
<h1>Today's Top Meals </h1>

    <section class="food">
        <div class="showitem" id="showitem">
               <?php
                  $con=mysqli_connect('localhost','root','','food_db');
                  $query="SELECT * FROM newfooditem";
                  $run=mysqli_query($con,$query);
                ?>
           <!--  <h1>All Food Item Details</h1> -->
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
                    <h4 id="productDetails">
  <?php echo $row['name']; ?><br>
  <span id="productPrice">Large :<?php echo $row['largeprice']; ?>/-</span>
  <span id="productPrice">Medium :<?php echo $row['mediumprice']; ?>/-</span>
  <span id="productPrice">Small :<?php echo $row['smallprice']; ?>/-</span>
</h4>
                        <button class="btn" ><a href="booking.php?id=<?php echo $row['id']; ?>">Order Now</a></button>
                    </div>
                </div>
                    <div class="card-inner">
                         <h1>Description</h1>
                         <p><?php  echo $row['description']; ?></P>
                    </div>
            </div>
                <?php } ?>
        </div>
    </section>
    

<script src="js/home.js" >
  // Get references to HTML elements
  var productPriceElement = document.getElementById('productPrice');
  var sizeSelector = document.getElementById('sizeSelector');

  // Add event listener to the sizeSelector
  sizeSelector.addEventListener('change', function() {
    // Get the selected option
    var selectedOption = sizeSelector.options[sizeSelector.selectedIndex];

    // Update the product price based on the selected size
    var newSize = selectedOption.value;
    var newPrice;

    // Set newPrice based on the selected size
    switch (newSize) {
      case 'large':
        newPrice = <?php echo $row['largeprice']; ?>;
        break;
      case 'medium':
        newPrice = <?php echo $row['mediumprice']; ?>;
        break;
      case 'small':
        newPrice = <?php echo $row['smallprice']; ?>;
        break;
      default:
        newPrice = 0; // Set a default value or handle an error
        break;
    }

    // Update the product price element
    productPriceElement.textContent = newPrice + '/-';
  });
</script>

</body>
</html>