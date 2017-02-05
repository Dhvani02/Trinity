
<html>
	<head>
		<title>Login Form</title>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
      	body {
      		background: url("img/bg.jpg");
  			background-size: cover;
      	}
      </style>
	 
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
		
		<!--Login form-->
		<div class="v-wrapper row">
			<div class="v-box row">
				<div class="center">
					<img src="img/logo2.png" style="height: 200px">
    			</div>
    			<div class=" col m4 offset-m4"> 
				<div class="card teal">
    				<!-- <div class="card-content white-text center">
      					<h4>IDPT QUIZ</h4>
      					
    				</div> -->
    				<div class="card-tabs ">
      					<ul class="tabs tabs-fixed-width tabs-transparent">
        					<li class="tab"><a class="active" href="#login">Login</a></li>
        					<li class="tab"><a href="#register">Register</a></li>
      					</ul>
    				</div>
    				<div class="card-content white lighten-4">
      					<div id="login">
      						<form method="post" class="center" action="login.php">
								<input type="text"  placeholder="Sap Id" name="sap"  />
								<input type="password" placeholder="Password" name="pass"/>
								<!-- <div class="col m12 center-align button-field back">
								
								<button class="col m6 green lighten-1 white-text btn-flat waves-effect waves-teal grey-text" style="margin-bottom:15px;margin-left:50px;border-radius: 20px !important;" name="register">
									Register
								</button>
							</div> -->
								<button class="btn btn-medium waves-effect waves-light" type="submit" name="login">
								Submit<i class="material-icons right">send</i>
  								</button>
							</form>	
						</div>
      				<div id="register">
      					<form method="post" action="register.php" class="center">
							<input type="text" placeholder="Sap Id" name="sap" />
							<input type="text" placeholder="Name" name="name" />
							<select name="dep">
								<option disabled selected>Department</option>
								<option value="Information_Technology">Information Technology</option>
								<option value="Computer_Engineering">Computer Engineering</option>
								<option value="Mechanical_Engineering">Mechanical Engineering</option>
								<option value="Chemical_Engineering">Chemical_Engineering</option>
								<option value="EXTC">EXTC</option>
								<option value="Electronic_Engineering">Electronic Engineering</option>
								<option value="Bio-Prod_Engineering">Bio-Prod_Engineering</option>
							</select>
							<select name="year">
								<option disabled selected>Year</option>
								<option value="FE">First Year</option>
								<option value="SE">Second Year</option>
								<option value="TE">Third Year</option>
								<option value="BE">Fourth Year</option>
							</select>		
							<input type="password" placeholder="Password" name="pass"/>
							
							<button class="btn btn-medium waves-effect waves-light" type="submit" name="register">
								Submit<i class="material-icons right">send</i>
  							</button>

					</form>
      				</div>
    			</div>
 			</div>
 			</div>
				
			</div>
		</div>
		  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
          
		<script type="text/javascript">
			
  $(document).ready(function() {
    $('select').material_select();
  });
		</script>
	</body>
</html>
