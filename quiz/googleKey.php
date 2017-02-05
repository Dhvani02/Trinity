<?php
	@session_start();
	include 'connection.php';
	$key = $_GET["id_token"];
	//echo $var;
	$sql = "UPDATE users SET LoginKey='".$key."' WHERE SapId = ".$_SESSION["SAP"];
	 if ($conn->query($sql) === TRUE) 
    {
	    header("location:rules&regulation.php");
	} else 
	{
	    echo "Error updating record: " . $conn->error;
	}

?>