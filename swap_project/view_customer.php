<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, phone_no, address, nric FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Phone no: " . $row["phone_no"]. " - Address: " . $row["address"]. " - NRIC: " . $row["nric"]. "<br>";
    }
} else {
    echo "0 results";
}
	

$conn->close();
?>
<p><a href="create_user.php"><button type="button">Create User</button></a></p>
<p><a href="delete_user.php"><button type="button">Delete User</button></a></p>
<br>
<p><a href="admin.php"><button type="button">Back</button></a></p>
</body>
</html>