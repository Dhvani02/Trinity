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
      </style>
    </head>

    <body>


      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Rules and Regulations</span>
              <p><span class="left-align white-text">
              <ol type="1" >
                <li>You will be asked objective questions</li>
                <li>You are required to answer each question in the stipulated time.</li>
                <li>If you fail to answer, the question is forfieted</li>
                <li>Once you have selected your answer, you can procced to the next question.</li>
                <li>Remaining time is not carried forward</li>
                <li>The end result of your test will be displayed</li>
              </ol>
            </span></p>
            </div>
            <div class="card-action">
              <a href="quiz.php"><button class="blue lighten-1 black-text btn-flat waves-effect waves-blue grey-text" style="margin-left: 25px;margin-bottom:15px; border-radius: 20px !important;">
                  Begin Quiz
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>