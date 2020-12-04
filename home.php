<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

	<style type="text/css">
		body {
			background-image:  url("src/bg.png");	
			background-size: cover;
			padding: 10px;	}

		div, #container {
					display: inline-block;
					height: 80px;
					width: 100%;
					background-color: rgba(234, 234, 234, 0.7);
 					border-radius: 25px;
					}

		#uculogo{
					display: inline-block;
					padding: 10px 10px 0px 10px;
					height: 60px;
					width: 60px;
					float: left;
					}		

		div h1	{
				font-family: arial;
				margin-top: 10px;
				padding: 0px 0px 0px 10px;
				float: left;
				font-size: 50px;
				}

		div #logout {
					margin-top: 20px;
					margin-right: 20px;
					text-align: center;
					padding: 10px 10px 10px 10px;
					border: none;
					float: right;
					background-color: #0693D4;
					border-radius: 25px;
					outline: none;
					}

		#section2 
		{
			float: left;
			display: inline-block;
			border-radius: 0px;
			margin-top: 5px;
			height: 1000px;
			width: 25%;
			background-color: rgba(234, 234, 234, 0.7);
		}

		#section3 
		{
			float: right;
			display:  inline-block;
			border-radius: 0px;
			margin-top: 5px;
			height: 1000px;
			width: 74.5%;
			background-color: rgba(234, 234, 234, 0.7);
		}





	</style>
</head>
<body>
	<div id="container">
		 <center> <img src="src/ucu.png" id="uculogo"> </center>
		 <center><h1>UCU CITE<h1></center>	
		<button type="button" name="logout" id="logout"><strong>LOGOUT</strong></button> 
	</div>

	<div id="section2">
		
	</div>

	 <div id="section3">
		
	</div>



</body>
</html>