<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<style type="text/css">
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;

	}

	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

</style>

<div id="box">
	<form method="post">
		<div style="font-size: 20px;margin: 10px;" ></div>
		<input type="text" name="User_name"><br><br>
		<input type="Passord" name="Passord"><br><br>

		<input type="submit" value="Login"><br><br>

		<a href="signup.php">Signup</a><br><br>
	</form>
	</div>
</body>
</html>