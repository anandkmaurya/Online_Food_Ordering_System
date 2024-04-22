<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food ordering site</title>
    <link rel="stylesheet" href="css/homepagestyle.css">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="logo"><img src="image/logo.png">
        
        </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a onclick="openPopoup()">Admin</a></li>
                <!-- <li><a  onclick="openPopup()">Login</a></li>
                <li><a  onclick="Popupup()">Sign Up</a></li> -->
            </ul>
        </nav>
        <div class="search" >
            <form class="search"  method="POST" action="search.php">
            <input type="text" name="search_data" id="search_data"  placeholder="search your  faviourite food" >
            <button type="text" ><img src="image/search.png" alt=""></button>
</form>
        </div>

        <!-- Pop up for Admin login -->
        <div class="popup" id="popoup">
            <img src="image/cut.png" onclick="closePopodown()">
            <form action="adminvalidation.php" method="POST">
            <h2>Admin Login Here</h2>
            <input type="text" name="number" placeholder="Phone Number" >
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit" >Login</button>
</form>
        </div>

        <!-- popup for user sign in-->
        <div class="popup" id="popup">
            <img src="image/cut.png" onclick="closePopup()">
            <form action="" method="POST">
            <h2>Login Here</h2>
            <input type="text" name="number" placeholder="Phone Number" >
            <input type="password" name="password" placeholder="Enter your password">
            <p>New User <a href="">Sign Up </a></p>
            <button type="submit" >Login</button>
</form>
        </div> 
        
        <!-- popup for user sign Up-->
        <div class="popup" id="popitup">
            <img src="image/cut.png" onclick="Popupdown()">
            <?php
                $error = isset($_GET['error']) ? $_GET['error'] : ''; // Retrieve the error parameter from the URL
                echo $error;
            ?>
            <form action="" method="POST">
        <h2>Register Here</h2>
        <input type="text" id="name" name="name" placeholder="Enter your name" />
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
        <input type="textarea" id="address" name="address" placeholder="Enter your full address" > 
        <?php
            $er3 = isset($_GET['er3']) ? $_GET['er3'] : ''; // Retrieve the error parameter from the URL
            echo $er3;
        ?>
        <input type="password" name="password" placeholder="Create your  password">
        <?php
            $er4 = isset($_GET['er4']) ? $_GET['er4'] : ''; // Retrieve the error parameter from the URL
            echo $er4;
        ?>
        <p>Allready have a account <a href="">Login Here</a></p>
        <button type="submit">Register</button>
    </form>
        </div> 
        
        <!--food section-->

        <h1>Today's Top Meals </h1>
        <section class="food">
            <div class="card">
                <img src="image/paneer.jpeg" alt="paneer">
                <div class="order">
                <h4>Paneer Butter Masala<br> <span>Rs.599/-</span></h4>
              <!--   <select>
                    <option value="large">Large</option>
                    <option value="medium">Medium</option>
                    <option value="small">Small</option>
                </select> -->
               <!--  <button class="btn">Read More</button> -->
            </div>
                </div>
            <div class="card">
                <img src="image/chicken.jpeg" alt="Chicken"><div class="order">
                    <h4>Chicken Tikka Masala <br> <span>Rs.599/-</span></h4>
                    <!-- <select>
                        <option value="large">Large</option>
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>
                    </select> -->
                   <!--  <button class="btn">Add To Cart</button> -->
                </div>
                </div>
            <div class="card">
                <img src="image/sahipaneer.jpeg" alt="paneer"><div class="order">
                    <h4>Sahi Panner / Kadai Paneer <br> <span>Rs.599/-</span></h4>
                    <!-- <select>
                        <option value="large">Large</option>
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>                        
                    </select> -->
                   <!--  <button class="btn">Add To Cart</button> -->
                </div>
                </div>
        </section>
        <section class="food">
            <div class="card">
                <img src="image/chicken.jpeg" alt="Chicken"><div class="order">
                    <h4>Chicken Tikka Masala <br> <span>Rs.599/-</span></h4>
                   <!--  <select>
                        <option value="large">Large</option>
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>
                    </select> -->
                   <!--  <button class="btn">Add To Cart</button> -->
                </div>
                </div>
            <div class="card">
                <img src="image/chicken.jpeg" alt="Chicken"><div class="order">
                    <h4>Chicken Tikka Masala <br> <span>Rs.599/-</span></h4>
                    <!-- <select>
                        <option value="large">Large</option>
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>
                    </select> -->
                  <!--   <button class="btn">Add To Cart</button> -->
                </div>
                </div>
            <div class="card">
                <img src="image/chicken.jpeg" alt="Chicken"><div class="order">
                    <h4>Chicken Tikka Masala <br> <span>Rs.599/-</span></h4>
                    <!-- <select>
                        <option value="large">Large</option>
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>
                    </select> -->
                  <!--   <button class="btn">Add To Cart</button> -->
                </div>
                </div>
        </section>
    </div>
    <script src="js/home.js"></script>
</body>
</html>