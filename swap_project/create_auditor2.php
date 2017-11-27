<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

//user information
$id=($_POST["id"]);
$name=($_POST["name"]);
$password=($_POST["password"]);

// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result =("SELECT * FROM auditor WHERE id = '$id'");
$val= mysqli_query($conn,$result);
$countid= mysqli_num_rows($val);

if($countid >0){
	echo "ID already associated with an account";
}

	
else{
	// sql to insert a record
	$sql = "INSERT INTO auditor (id,name,password)
	VALUES ('$id','$name','$password')";
		if ($conn->query($sql) === TRUE) {
			echo "Record inserted successfully";
		} else {
			echo "Error inserting record: " . $conn->error;
		}
}
	

$conn->close();
?>
<p><a href="create_auditor.php"><button type="button">Done</button></a></p>
</html>