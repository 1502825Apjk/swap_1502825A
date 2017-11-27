<html>
<?php


//user information
$username=($_POST["username"]);
$password=($_POST["password"]);



			   if ($username == 'admin' && 
                  $password == 'password') {
                  
                  header( 'Location: admin.php' );
               }else {
                  echo '<b>Wrong username or password</b>';
               }
?>
<p><a href="admin_login.php"><button type="button">Back</button></a></p>
</html>

