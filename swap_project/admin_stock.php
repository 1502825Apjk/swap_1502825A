<!DOCTYPE html>
<html>
<head>
	<title>Stocks</title>
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

$sql = "SELECT stock_id, brand, model, stock FROM stock";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Stock id: " . $row["stock_id"]. " - Brand: " . $row["brand"]. " - Model: " . $row["model"]. " - Stock: " . $row["stock"]. "<br>";
    }
} else {
    echo "0 results";
}
	

$conn->close();
?>
<br>
<p><a href="update_stock.php"><button type="button">Update Stock</button></a></p>
<p><a href="delete_stock.php"><button type="button">Delete Stock Record</button></a></p>
<br>
<p><a href="admin.php"><button type="button">Done</button></a></p>
</body>
</html>