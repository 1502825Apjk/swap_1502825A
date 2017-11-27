<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchshop.sql";

//user information
$name=($_POST["name"]);
$password=($_POST["password"]);
$phone_no=($_POST["phone_no"]);
$address=($_POST["address"]);
$nric=($_POST["nric"]);


// Create connection
$conn = mysqli_connect("localhost","root","","watchshop");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result =("SELECT * FROM customer WHERE nric = '$nric'");
$val= mysqli_query($conn,$result);
$countic= mysqli_num_rows($val);

if($countic >0){
	echo "ID already associated with an account";
}
	
else{
	// sql to insert a record
	$sql = "INSERT INTO customer (name,password,phone_no,address,nric)
	VALUES ('$name','$password','$phone_no','$address','$nric')";
		if ($conn->query($sql) === TRUE) {
			echo "Record inserted successfully";
		} else {
			echo "Error inserting record: " . $conn->error;
		}
}
	

$conn->close();
?>
<p><a href="sign_up.php"><button type="button">Done</button></a></p>
</html>