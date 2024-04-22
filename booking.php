<?php
// Check if the "id" parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve the value of the "id" parameter
    $id = $_GET['id'];
    $con=mysqli_connect('localhost','root','','food_db');
    
    // Corrected the SQL query
    $product = "SELECT * FROM newfooditem WHERE id='$id'";
    
    $result = mysqli_query($con, $product);
    
    // If there was a row returned from the database, print it out
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom CSS styles here */
        .form-group-radio {
            display: flex;
            flex-direction: row;
        }

        .form-check {
            margin-right: 20px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>

    <div class="container mt-6" style="max-width: 800px !important; ">
        <?php
            error_reporting(0);
            session_start();
            if (isset($_SESSION['name'])) {
                
        ?>
        <h1 class="mb-4" >Shipping Information</h1>
        <form class="info" action="bookingregister.php" method="POST">
            <h2 >Product Information</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Product Name:</label>
                    <input type="text" class="form-control" name="pname" value="<?php  echo ''. $row["name"]; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Product Size:</label>
                    <div class="form-group-radio">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="size" value="<?php echo $row["largeprice"]; ?>" id="largeRadio"  required>
                            <label class="form-check-label" for="largeRadio">Large : <?php echo $row["largeprice"]; ?>/-</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="size" value="<?php echo $row["mediumprice"]; ?>" id="mediumRadio" required>
                            <label class="form-check-label" for="mediumRadio">Medium : <?php echo $row["mediumprice"]; ?>/-</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="size" value="<?php echo $row["smallprice"]; ?>" id="smallRadio" required>
                            <label class="form-check-label" for="smallRadio">Small : <?php echo $row["smallprice"]; ?>/-</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>User Id:</label>
                    <input type="text" class="form-control" name="user_id" value="<?php echo $_SESSION['id']; ?>" readonly>
                </div>
            </div>

            <h2>Booking Information</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Additional Name:</label>
                    <input type="text" class="form-control" name="oname" placeholder="Enter Your Name (Optional)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Number:</label>
                    <input type="text" class="form-control" name="number" value="<?php echo $_SESSION['number']; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Additional Number:</label>
                    <input type="text" class="form-control" name="anumber" placeholder="Enter Your Name (Optional)">
                </div>
            </div>

            <!-- Repeat similar form-row blocks for other booking information fields -->

            <h2>Booking Address</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Home Address:</label>
                    <textarea class="form-control" name="address" rows="3" readonly><?php echo $_SESSION['address']; ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Current Address:</label>
                    <textarea class="form-control" name="caddress" placeholder="Enter Your Current Address" rows="3" required></textarea >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>City:</label>
                    <input type="text" class="form-control" name="city" rows="3" placeholder="Enter your current city" required></input >
                </div>
                <div class="form-group col-md-6">
                    <label>Pin Code:</label>
                    <input type="text" class="form-control" name="pincode" rows="3" placeholder="Enter your current Pin Code" required></input >
                </div>
            </div>

            <!-- Repeat similar form-row blocks for other address fields -->

            <h2>Payment Method</h2>
                    <label>Payment Option:</label>
                    <div class="form-group-radio">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="payment" value="Online Mode" id="onlineRadio" disabled required>
                            <label class="form-check-label" for="onlineRadio">Online Mode (Unavailable)</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="payment" value="Cash On Delivery" id="offlineRadio" required>
                            <label class="form-check-label" for="offlineRadio">Cash On Delivery</label>
                        </div>
                    </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>


        <?php
            } else {
                header("Location: homepage.php");
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
        }
    } else {
        echo "No matching records found.";
    }
} else {
    // Handle the case when the "id" parameter is not set
    echo "No id parameter found in the URL.";
}
?>