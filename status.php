<?php
    $con=mysqli_connect('localhost','root','','food_db');
    if (isset($_GET['id'])) {
        $statusId = $_GET['id'];
        // Validate and sanitize $statusId if necessary before using it in the SQL query
        // print($_GET['id']);die;
        // Perform the delete operation in the database
        $deleteQuery = "UPDATE allbooking SET status=3 WHERE id = '$statusId'";
        mysqli_query($con, $deleteQuery);

        // Redirect to the same page after deletion
        header("Location: bookingrequest.php");
        exit();
    }
?>
