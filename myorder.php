<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Your Page Title</title>
    <style>
        
    </style>
</head>
<body>

    <!-- Your existing HTML code with Bootstrap styles -->
    <div class="container mt-5">
        <?php
            session_start();
          $con=mysqli_connect('localhost','root','','food_db');
            /* if($con){
             echo "connected";

              } */
              $userid=$_SESSION['id'];
          $query="SELECT * FROM allbooking ";
            $run=mysqli_query($con,$query);
        ?>

        <h1>All My Booking Orders</h1>
        <a href=userdashboard.php>Go To Dashboard</a>
        <table id="abc" class="table" style="float: inline-end !important;">
            <thead>
                <tr>
                    <th>Booking Id</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Additional Name</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Number</th>
                    <th>Additional Number</th>
                    <th>Address</th>
                    <th>Current Address</th>
                    <th>City</th>
                    <th>Pin Code</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM allbooking where user_id=$userid ORDER BY id DESC";
                $run = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($run)) {
                    $id = $row['id'];
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['oname']; ?></td>
                        <td><?php echo $row['pname']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['anumber']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['caddress']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['pincode']; ?></td>
                        <td><?php echo $row['payment']; ?></td>
                        <td><?php
                        if($row['status']==1){

                            echo 'Pending'; 
                        }
                        elseif($row['status']==2){
                            ?>
                            <form method="POST" action="">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-success btn-sm" onclick="confirmDelivery()">Delivered</button>
                        </form>
                        <?php }
                        elseif($row['status']==3){

                            echo 'Canceled'; 
                        }elseif($row['status']==4){
                            echo 'Completed';
                        }
                        ?></td>
                        <td>
                            <a href="edit_delete.php?action=edit&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Edit</a>
                            |
                            <form method="POST" action="">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Zwckb1of5C8q2K3+zlFzTEdJ9vVWByoP7HxAFO/mPvKqcTiv+ffmC7E1szQU5J/3" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Initialize DataTable
        $(document).ready(function () {
            $('#abc').DataTable();
        });
    </script>
    <script>
  function confirmDelivery() {
    if (confirm('Are you sure your product is delivered?')) {
      location.reload(); // Reload the page if the user confirms
    }
  }
</script>
</body>
</html>
<?php
// Handle the delete action on the same page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $statusId = $_POST['id'];
        
        // Perform the delete operation in the database
        $deleteQuery = "UPDATE allbooking SET status=4 WHERE id = '$statusId'";
        mysqli_query($con, $deleteQuery);

        // Redirect to the same page after deletion
        // header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}
?>
