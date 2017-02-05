<?php
	@session_start();
	include 'connection.php';
	if (isset($_POST["register"])) 
	{
		$sap = $_POST["sap"];
		$name= $_POST["name"];
		$dept= $_POST["dep"];
		$year= $_POST["year"];
		$pass= $_POST["pass"];

		if(!strlen($sap)==10)
		{
			echo "<script type='text/javascript'>alert('SAP ID is invalid');</script>";
			header("string:registration.php");
		}

		$counter = 0;
		$qarray = array();

		$sql = "SELECT QuestionId FROM questiontbl ORDER BY RAND() LIMIT 10";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $qarray[$counter++] = $row["QuestionId"];
            }
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();

        }


        $questionId = implode(",", $qarray);
        //echo $questionId;

        $timestamp = date("G:i:s", time());
        $key = $sap;
        
        // echo $timestamp;
      
        $sql =  "INSERT INTO users VALUES ('".$sap."','".$pass."','".$name."','".$dept."','".$year."','".$key."','".$questionId."','".$timestamp."', 0)";

        if (mysqli_query($conn, $sql)) 
        {
            $_SESSION["SAP"] = $sap;
            header("location:googlelogin.php");
        } 
        else 
        {
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('An error was encountered');</script>";
			header("string:registration.php");
        }


	}


?>