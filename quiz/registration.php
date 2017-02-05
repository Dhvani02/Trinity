
<html>
	<head>
		<title>Registration Form</title>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <style>
		#login-form input{
			background: #212121 !important;
			border:4px !important;
			border-radius: 10px !important;
			border-color: #ffffff !important;
		}
		
		#login-form input::-webkit-input-placeholder{
			color:#ffffff;
		}
		#login-form input::-webkit-input-text{
			color:#ffffff;
		}
		#login-form input:focus{
			box-shadow:none !important;
			color: #ffffff;
		}
		
		.v-wrapper{
			margin-bottom:0;
			display:flex;
			height:calc(100vh);
			width:100%;
			position:absolute;
			top:0;
		}
		.v-box{
			display:table-cell;
			margin:auto;
		}
		
		.button-field{
			background:#CCCBCB;
			height: 75px;
			padding-top:20px !important;
		}

		.back{
			background-color: #172228;
		}
		select, option {
		    display: -webkit-box;
		    margin: 10%;
		    text-indent: 1%;
		    width: 82%;
		    background-color: #212121;
		    border-radius: 10px;
		    border: 1px #212121;
		    color: white;
		}
		
	  </style>
    </head>

    <body class="back">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
		
		<!--Login form-->
		<div class="v-wrapper row">
			<div class="v-box">
				<div class="col offset-m3 m6 back no-padding">
					<div class="row">
						<h4 class="center-align white-text"><img src="img/logo.jpg" alt="" class="circle responsive-img"></h4>
					</div>
					<form method="post" id="login-form" action="register.php">
							<input type="text" class="col s10 offset-s1" placeholder="Sap Id" name="sap" />
							<input type="text" class="col s10 offset-s1" placeholder="Name" name="name" />
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
							<input type="password" class="col s10 offset-s1" placeholder="Password" name="pass"/>
							<div class="col s12 center-align button-field back">
								<button class=" yellow lighten-1 black-text btn-flat waves-effect waves-blue grey-text" style="margin-bottom:15px; border-radius: 20px !important;" name="register">
									Register
								</button>
							</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
