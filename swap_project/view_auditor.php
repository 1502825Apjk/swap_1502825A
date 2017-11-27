<!DOCTYPE html>
<html>
<head>
	<title>Auditors</title>
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

$sql = "SELECT id, name FROM auditor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Auditor ID: " . $row["id"]. " - name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
	

$conn->close();
?>
<p><a href="admin.php"><button type="button">Back</button></a></p>
</body>
</html>