<!DOCTYPE html>
<html>
<head>
	<title>Lab3</title>
	<h1>Welcome to My Page</h1>
	<h2>Please Select Your Choice</h2>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style type="text/css">

  		
  		h1{
  			text-align: center;
  			margin-top: 200px;
  			font-family: Courier, Monaco, monospace;
  			font-weight: bold;
  			font-size: 100px;
  			text-shadow : 3px 3px 1.5px #000000;
  			color: #99AAFF;
  		}

  		h2{
  			text-align: center;
  			font-family: Courier, Monaco, monospace;
  			font-weight: bold;
  			text-shadow : 1px 1px 1.5px #000000;
  			color: #FFFFFF;
  		}
  		button{
  			margin-left: 910px;
  			margin-top: 40px;

  		}
  		body{
  			background: url(http://upic.me/i/97/bg_full_4.gif);
  			background-size: cover;
  		}
  		#menu{
  			margin-left: 880px;

  		}


  	</style>
</head>
<body>
	<div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select
  		<span class="caret"></span></button>
  		<ul class = dropdown-menu id = "menu">
    		<li><a href="lab3.php">BMI</a></li>
    		<li><a href="lab3_bmr.php">BMR</a></li>
    		<li><a href="lab3_ldl.php">LDL</a></li>
    	</ul>
  	</div>

</body>
</html>