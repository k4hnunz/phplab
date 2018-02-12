<!DOCTYPE html>
<html>
<head>
	<title>BMI Checking</title>

	<style type="text/css">


		body{

			background-color: grey;
		}

		.wrapper{

			border: 100px;

		}

		h2{
			text-align: center;
  			font-family: Courier, Monaco, monospace;
  			font-weight: bold;
  			font-size: 80px;
  			text-shadow : 1.5px 1.5px 2px #000000;
  			color: #FF0011;
  			margin-top: 200px;
		}

		h3{
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
	<h2>BMI Calculating</h2>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h3>Enter Height/Kg : <input id = text type="text" name="hei"></h3>
		<h3>Enter Weight/Kg : <input id = text type="text" name="wei">
		<p><input id = button type="submit" value="Submit"<br></p>
		<br><br>
		<h4><?php 

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		$hei=$_POST["hei"];
    		$wei=$_POST["wei"];
    		$bmi=$wei/($hei/100)**2;
   			echo "BMI = $bmi ";
    		echo "<br>";
    		echo "<br>";

   			if($bmi<"18.5"){
        		echo "Lower Weight - You have lower weight. You should eating nutritious food and exercise.";	
    		}
    		else if($bmi>="18.5"&&$bmi<"23.4"){
        		echo "Normal Weight - You have normal weight. The risk of the disease is minimal";
        		}
        	else if($bmi>="23.5"&&$bmi<"28.4"){
        		echo "Over Weight - You have over weight. You could try to lose weight to standart weight";
        	}

        	else if($bmi>="28.5"&&$bmi<"34.9"){
        		echo "Obesity Level 1 - You have Obesity level 1.Trying to lose weight as much as possible, because your risk of blood pressure and diabetes.";
        	}

        	else if($bmi>="35.0"&&$bmi<"39.9"){
        		echo "Obesity Level 2 - You have Obesity Level 2. Your risk of disease is high. Should diet and exercise seriously.";
        	
	
    		}else{
        		 echo "Obesity Maximum Level - Obesity Maximum Level. You are serious obesity.";
        		
    		}
		}

		 ?></h4>
  	</form>
  	<form action="lab3_index.php" id ="btn2">
			<p><input id = button2 type="submit" value="Back to Homepage"<br></p>
		</form>

	</div>

</body>
</html>