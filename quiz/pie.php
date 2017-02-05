<?php

	
	@session_start();
	include 'connection.php';
	$ans[0] = $_POST["ans1"];
	$ans[1] = $_POST["ans2"];
	$ans[2] = $_POST["ans3"];
	$ans[3] = $_POST["ans4"];
	$ans[4] = $_POST["ans5"];
	$ans[5] = $_POST["ans6"];
	$ans[6] = $_POST["ans7"];
	$ans[7] = $_POST["ans8"];
	$ans[8] = $_POST["ans9"];
	$ans[9] = $_POST["ans10"];


                      // foreach( $ans as $value ) {
                      //       echo "Value is $value <br />";
                      //    }
			$qIds = "";
			//echo $_SESSION["SAP"];
			$sql = "SELECT QuestionsList FROM users WHERE SapId = ".$_SESSION["SAP"];
			$result = $conn->query($sql);
		    if ($result->num_rows > 0) 
		    {
		        // output data of each row
		        while($row = $result->fetch_assoc())
		         {
		            $qIds = $row["QuestionsList"];
		        }
		    }
		    else
		    {
		        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		         echo "<script type='text/javascript'>alert('An error was encountered');</script>";
				 header("location:index.php");
		    }
		    
		    $questionID = explode(',', $qIds);

		    $count = 0;
			$right = 0;
		    $wrong = 0;

         	$sql = "SELECT Answer FROM questiontbl WHERE QuestionId IN (".$qIds.")";
         	$result = $conn->query($sql);
		    if ($result->num_rows > 0) {
		        // output data of each row
		        while($row = $result->fetch_assoc())
		        {
		           if ($ans[$count++] == $row["Answer"]) 
		           {
		           		$right++;
		           }
		           else
		           {
		           		$wrong++;
		           }
		        }
		    }
		    else
		    {
		        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		        echo "<script type='text/javascript'>alert('An error was encountered');</script>";
				 header("location:index.php");					 
		    }
		    $total = $right+$wrong;
		   // echo "Score = ".$right." / ".$total; 
		    $_SESSION["score"]=$right;   
?>
<html>
  <head>
  	 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Answers', 'Total Questions'],
          ['Correct',     <?=$right?>],
          ['Incorrect',      <?=$wrong?>],
        ]);

        var options = {
          title: 'Quiz Analysis',
          backgroundColor: { fill: "#172228" },
          titleTextStyle: {color: "white"},
          textStyle: {color: "white"}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

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
    <div id="piechart" style="width: 80%; height: 50%; padding-left: 10%"></div>
   <center> <a href="interdepartment.php"><button class="blue lighten-1 btn waves-effect waves-light" type="submit" name="action">View Department Standings
    <i class="material-icons">equalizer</i>
  </button></a></center>

     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
