<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

//user information
$stock_id=($_POST["id"]);
$stock=($_POST["stock"]);

// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result =("SELECT * FROM stock WHERE stock_id = '$stock_id'");
$val= mysqli_query($conn,$result);
$countid= mysqli_num_rows($val);

if($countid ==0){
	echo "No such stock in record";
}

	
else{
	// sql to update a record
	$sql = "UPDATE stock SET stock= $stock WHERE stock_id= $stock_id";
		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
}
	

$conn->close();
?>
<p><a href="update_stock.php"><button type="button">Done</button></a></p>
</html>