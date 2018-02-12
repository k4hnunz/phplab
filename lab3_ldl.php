<!DOCTYPE html>
<html>
<head>
	<title>LDL Checking</title>

    <style type="text/css">
        body{

            background-color: #FF9999;
        }
        
        h2{
            text-align: center;
            font-family: Courier, Monaco, monospace;
            font-weight: bold;
            font-size: 80px;
            text-shadow : 1.5px 1.5px 2px #000000;
            color: #4433AA;
            margin-top: 200px;
        }
        h3{
            margin-left: 850px;
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
	<h2>คำนวณหาคอเรสเตอรอล</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h3>ไตรกลีเซอไรด์ : <input id = text type="text" name="tri"></h3>
		<h3>ไขมัน HDL: <input id = text type="text" name="hdl"></h3>
		<h3>ไขมัน LDL : <input type="text" name="ldl"></h3>
		<p><input id = button type="submit" value="Submit"<br></p>
		<br><br>
		<h4><?php 

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		$tri=$_POST["tri"];
    		$hdl=$_POST["hdl"];
    		$ldl=$_POST["ldl"];
    		
            $cal = $ldl+$hdl+($tri/5);
   			echo "คอเรสเตอรอล = $cal";
    		echo "<br>";
    		echo "<br>";

    		if($cal<200){
    			echo "ดีมาก";
    		}
    		else if($cal>=200 && $cal <= 240){
    			echo "ค่อนข้างสูง";
    		}
    		else if($cal > 240){
    			echo "สูง";
    		}
    		
            else{
                echo "Please Check Your Input";
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