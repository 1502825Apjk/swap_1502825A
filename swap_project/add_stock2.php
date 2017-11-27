<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

//user information
$brand=($_POST["brand"]);
$model=($_POST["model"]);
$stock=($_POST["stock"]);

// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result =("SELECT * FROM stock WHERE brand = '$brand' AND model = '$model'");
$val= mysqli_query($conn,$result);
$countic= mysqli_num_rows($val);

if($countic >0){
	echo "Product record already exists";
}

	
else{
	// sql to insert a record
	$sql = "INSERT INTO stock (brand,model,stock)
	VALUES ('$brand','$model','$stock')";
		if ($conn->query($sql) === TRUE) {
			echo "Record inserted successfully";
		} else {
			echo "Error inserting record: " . $conn->error;
		}
}
	

$conn->close();
?>
<p><a href="add_stock.php"><button type="button">Done</button></a></p>
</html>