<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

//stock information
$stock_id=($_POST["id"]);


// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$result =("SELECT * FROM stock WHERE stock_id = '$stock_id'");
$val= mysqli_query($conn,$result);
$count= mysqli_num_rows($val);

// sql to delete a record
if($count!=0){
$sql = "DELETE FROM stock WHERE stock_id= $stock_id";
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
else{
	echo "No such stock in record";
}

$conn->close();
?>
<p><a href="delete_stock.php"><button type="button">Done</button></a></p>
</body>
</html>