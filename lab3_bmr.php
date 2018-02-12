<!DOCTYPE html>
<html>
<head>
	<title>BMR Checking</title>

	<style type="text/css">

		body{
			background-color: #9999BB;
		}
		
		h2{
			text-align: center;
  			font-family: Courier, Monaco, monospace;
  			font-weight: bold;
  			font-size: 80px;
  			text-shadow : 1.5px 1.5px 2px #000000;
  			color: #00AAFF;
  			margin-top: 200px;
		}
		h3{
			margin-left: 720px;
		}
		p{
			text-align: center;
		}

		h4{
			margin-top: -40px;
			text-align: center;
		}

		#btn2{
			text-align: center;
		
		}


	</style>
</head>
<body>

	<div class="page-wrapper" id = "wrapper">
	<h2>BMR Calculating</h2>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h3>Enter you Gender : <input type="text" name="gen" id = "gender">  man or men / women or woman</h3>
		<h3>Enter Height/Kg : <input id = text type="text" name="hei"></h3>
		<h3>Enter Weight/Kg : <input id = text type="text" name="wei"></h3>
		<h3>Enter You Age : <input type="text" name="age"></h3>
		<p><input id = button type="submit" value="Submit"<br></p>
		<br><br>
		<h4><?php 

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		$hei=$_POST["hei"];
    		$wei=$_POST["wei"];
    		$gen=$_POST["gen"];
    		$age=$_POST["age"];
    		if($gen == "man" | $gen == "men" | $gen == "Man" | $gen == "Men"){
    			$bmr = 66+(13.7*$wei)+(5*$hei)-(6.8*$age);
    		}

    		else if ($gen == "woman" | $gen == "women" | $gen == "Woman" | $gen == "Women"){
    			$bmr = 665 + (9.6*$wei)+(1.8*$hei)-(4.7*$age);
    		}

    		else{
    			echo "Please Check Your Input ";
    		}
   			echo "BMR (พลังงานพื้นฐานในการมีชิวิต) = $bmr";
    		echo "<br>";
    		echo "<br>";

  

    	}


		 ?></h4>
  	</form>

  	<form action="lab3_index.php" id ="btn2">
			<p><input id = button2 type="submit" value="Back to Homepage"<br></p>
		</form>

	</div>

</body>

</html>