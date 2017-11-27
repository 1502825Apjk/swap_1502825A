<html>
<?php
	  
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "watchshop.sql";
		
	  
            $msg = '';


				$loginnric=($_POST['nric']);
				$loginpassword=($_POST['password']);
				
				// Create connection
					$conn = mysqli_connect("localhost","root","","watchshop");
					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
				$res=("SELECT * FROM customer WHERE nric='$loginnric' AND password='$loginpassword'");
				$val= mysqli_query($conn,$res);

               $count= mysqli_num_rows($val);
			  	if($count==1){

                  header( 'Location: customer.php' );
               }else {
                  echo 'Wrong username or password';
               }
			   $conn->close();

         ?>
         <p><a href="customer_login.php"><button type="button">Back</button></a></p>
         </html>