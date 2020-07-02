<?php 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'itschool');	

// storing clients to database
if (isset($_POST['submit'])) 
{
	// receiving input values
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

  	// storing name, phone and message into database
  	$query = "INSERT INTO `clients` (name, phone, message) VALUES ('$name', '$phone', '$message')";
  	mysqli_query($db, $query);

  	echo "You have successfully submitted form!";
}
else 
{
	echo "Something went wrong";
}

?>
