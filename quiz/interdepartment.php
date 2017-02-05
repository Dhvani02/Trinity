<?php

	@session_start();
  include 'connection.php';
  if(!isset($_SESSION["SAP"])){
    header("location:index.php");
  }

	$dept = "";

	$sql = "SELECT Department FROM users WHERE SapId = ".$_SESSION["SAP"];
	$result = $conn->query($sql);
    if ($result->num_rows > 0)
     {
        // output data of each row
        while($row = $result->fetch_assoc())
         {
            $dept = $row["Department"];
        }
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die();
    }

   // echo $dept;

    $score = 0;
    $entries = 0;
    $sql = "SELECT Score, Entries FROM departmentstandings WHERE DepartmentName LIKE '".$dept."'";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $score = $row["Score"];
            $entries = $row["Entries"];
        }
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die();
    }

    $score = $score + $_SESSION["score"];
    $entries++;
    $tally = $score/$entries;
    
    $sql =  "UPDATE departmentstandings SET Score=".$score.",Entries=".$entries.",Tally=".$tally." WHERE DepartmentName LIKE '".$dept."'"; 

    	//echo "<br><br>".$sql."<br><br>";

    if ($conn->query($sql) === TRUE) 
    {
	    //echo "Record updated successfully";
	} else 
	{
	    echo "Error updating record: " . $conn->error;
	}

	$sql = "SELECT DepartmentName, Tally FROM departmentstandings";
	$result = $conn->query($sql);
	$deptNames = array();
	$tallyMarks = array();
	$counter = 0;
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
        		$deptNames[$counter] = $row["DepartmentName"];
        		$tallyMarks[$counter] = $row["Tally"];
        		$counter++;
		}
    }
    else
    {
        echo "<script type='text/javascript'>alert('An error was encountered');</script>";
         header("location:index.php");
    }
    // foreach( $deptNames as $value ) {
    //         echo "Value is $value <br />";
    //      }
    $counter=0;
    @session_destroy();
 ?>           



<html>
  <head>
   <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Department', 'Score'],
          ['IT',     <?=$tallyMarks[0]?>],
          ['Comps',      <?=$tallyMarks[1]?>],
          ['Mech',  <?=$tallyMarks[2]?>],
          ['Chem', <?=$tallyMarks[3]?>],
        ]);

        var options = {
          title: 'Quiz Analysis'
        };

        var chart = new google.visualization.BarChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      history.pushState(null, null, document.URL);
      window.addEventListener('popstate', function () {
          history.pushState(null, null, document.URL);
      });
    </script>
    <style type="text/css">
      body{
      background-color: #172228;

      }
    </style>
  </head>
  <body>
    <div id="piechart" style="width: 90%; height: 50%;"></div>
    <br><br><br>
    <center><a href="index.php"><button class="btn waves-effect waves-light green lighten-1" type="submit" name="action">Logout
    <i class="material-icons">exit_to_app</i>
  </button></a></center>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
