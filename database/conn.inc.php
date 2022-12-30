

<?php
	//Connection Details
	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="carevents";

	//Make the Connection
	$conn=mysqli_connect($server_name,$username,$password,$database_name);

	//Check the connection
	if(!$conn)
	{
		die("Connection Failed:" . mysqli_connect_error());
	}
?>