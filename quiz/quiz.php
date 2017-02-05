<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        .card,body{
          background-color: #172228;
        }
        .row{
          padding-top: 10%;
        }
        [type="radio"]:not(:checked), [type="radio"]:checked {
            position: static;
            left: -9999px;
            opacity: 0.5;
        }
      </style>
    </head>

    <body>


      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Quiz</span>
              <p><span class="left-align white-text">
                <form action="pie.php" method="post">
                  <?php
                      @session_start();
                      include 'connection.php';

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
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }

                      $questionID = explode(',', $qIds);


                      $sql =  "UPDATE users SET Flag=-999 WHERE SapId = ".$_SESSION["SAP"]; 

                        //echo "<br><br>".$sql."<br><br>";

                      if ($conn->query($sql) === TRUE) 
                      {
                       // echo "Record updated successfully";
                        } else 
                        {
                            echo "Error updating record: " . $conn->error;
                            echo "<script type='text/javascript'>alert('You have already taken the quiz');</script>";
                            header("location:index.php");
                        }
                     
                      // foreach( $questionID as $value ) {
                    //         echo "Value is $value <br />";
                    //      }

                        $counter = 1;
                        $ans = "ans";
                        $sql = "SELECT * FROM questiontbl WHERE QuestionId IN (".$qIds.")";
                        $result = $conn->query($sql);
                      if ($result->num_rows > 0) 
                      {
                          // output data of each row
                          while($row = $result->fetch_assoc()) 
                          {
                            $question = $row["Question"];
                            $optionA = $row["OptionA"];
                            $optionB = $row["OptionB"];
                            $optionC = $row["OptionC"];
                            $optionD = $row["OptionD"];
                            $ans = "ans".$counter;
                            echo "<br><br>";
                            echo "Question ".$counter++.". ".$question."<br>";
                            echo "<input type='radio' name='".$ans."' value='".$optionA."'>".$optionA."<br>";
                            echo "<input type='radio' name='".$ans."' value='".$optionB."'>".$optionB."<br>";
                            echo "<input type='radio' name='".$ans."' value='".$optionC."'>".$optionC."<br>";
                            echo "<input type='radio' name='".$ans."' value='".$optionD."'>".$optionD."<br>";
                          }
                      }
                      else
                      {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);;
                      }

                  ?>
                
            </span></p>
            </div>
            <div class="card-action">
              <button class="green lighten-1 black-text btn-flat waves-effect waves-blue grey-text" style="margin-left: 25px;margin-bottom:15px; border-radius: 20px !important;">
                  Submit
                </button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        
        history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
      </script>
    </body>
  </html>