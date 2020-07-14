<!DOCTYPE HTML>
<html>
<head>
<title>
Guessing Game for Muhammad Hanan Asghar
</title>
</head>
<body>
	<h2>Welcome to the my guessing game</h2>
	<p><?php
		$hint = 14;
		$val = $_GET['guess'];
		if($val == null ){
			print("Your guess is too short");
		}
		else if(filter_var($val, FILTER_VALIDATE_INT) == false){
			print("Your guess is not a number");
		}else if($val < $hint){
			print("Your guess is too low");
			}else if($val > $hint){
				print("Your guess is too high");
				}
				else if($val == $hint){
					print("Congratulations - You are right");
					}
	?></p>
</body>
</html>
