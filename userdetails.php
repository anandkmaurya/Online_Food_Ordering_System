<?php
$con=mysqli_connect('localhost','root','','food_db');
if($con){
    echo "connected";
}
$query="SELECT * FROM newuser";
$run=mysqli_query($con,$query);
?>
<style>
table,td,tr{
	border:1px solid black;
	border-collapse:collapse;
}
table{
	width:100%;
}
</style>
<body>
<table>
<tr>
<td><b>id</b></td>
<td><b>Name</b></td>
<td><b>Number</b></td>
<td><b>Address</b></td>
<td><b>Password</b></td>
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
</tr>
<?php } ?>
</table>
</body>