<?php
	@session_start();
	include 'connection.php';
	if (isset($_POST["register"])) 
	{
		header("location:registration.php");
	}
	if (isset($_POST["login"]))
	{
		$sap = $_POST["sap"];
		$pass = $_POST["pass"];

		$sql = "SELECT Name, Department FROM users WHERE SapId = '".$sap."'ANd Password =  '".$pass."' AND Flag = 0";
		$result = $conn->query($sql);
	    if ($result->num_rows > 0) 
	    {
	        // output data of each row
	        while($row = $result->fetch_assoc()) 
	        {
	        	$_SESSION["SAP"]=$sap;
	            header("location:rules&regulation.php");
	        }
	    }
	    else
	    {
	        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	        header("location:index.php");
	    }
	}


?>