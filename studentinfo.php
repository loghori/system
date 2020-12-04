<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		body {
			background-image:  url("src/bg.png");	
			background-size: cover;	}

		div, #container {
					height: 400px;
					width: 300px;
					background-color: #EAEAEA;
					position: absolute;
  					left: 50%;
 					top: 50%;
  					transform: translate(-50%, -50%);
 					border-radius: 25px;
					}

		#uculogo {
					height: 100px;
					width: 100px;
					margin-top: 30px;
				}		
		input{
			outline:none !important;
			width: 170px;
			height: 40px;
			border: solid #707070;
			border-radius: 25px;
			text-align: center;
			}
		#pass, #submit  {
			margin-top: 10px;
		}

		#submit {
			display: block;
			width: 100px;
			height: 30px;
			border:none;
			background-color: #0693D4;
			border-radius: 25px;
			outline: none;
		}
	</style>
</head>
<body>
	<div id="container">
		 <center> <img src="src/ucu.png" id="uculogo"> </center>
		 <center><h4>UCU CITE<h4></center>	

		 <center>
		 	<form method="POST">
		 	<input type="text" name="id_no" placeholder="ID No." >
		 	<input type="password" name="password" placeholder="Password" id="pass">
		 	<button type="button" name="submit" id="submit"><strong>SIGN IN</strong></button> 
		 	</form>
		 </center>	


	</div>




</body>
</html>