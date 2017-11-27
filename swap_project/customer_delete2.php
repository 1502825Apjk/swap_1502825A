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
$nric=($_POST["nric"]);
$name=($_POST["name"]);
$password=($_POST["password"]);
// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$result =("SELECT * FROM customer WHERE nric = '$nric' AND name = '$name' And password = '$password'");
$val= mysqli_query($conn,$result);
$count= mysqli_num_rows($val);

// sql to delete a record
if($count!=0){
$sql = "DELETE FROM customer WHERE nric='$nric' AND name = '$name' And password = '$password'";
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
else{
	echo "Incorrect information";
}

$conn->close();
?>
<p><a href="customer_delete.php"><button type="button">Back</button></a></p>
</body>
</html>