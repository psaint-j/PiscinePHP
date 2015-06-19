<?php session_start();
if ($_GET['submit'] == "OK")
{
	$_SESSION["login"] = $_GET["login"] . "\n";
	$_SESSION["passwd"] = $_GET["passwd"] ."\n";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<style>
.formulaire{
	text-align: center;
	height: 100px;
	width: 75%;
	background-color: black;
	color: white;
	position: absolute;
}
</style>
	<form class="formulaire" action="index.php" method"get"><br>
	Login:<input type="text" name="login"<?php echo "value=".$_SESSION['login']."";?>><br>
   	Mot de passe:<input type="password" name="passwd"<?php echo "value=".$_SESSION['passwd']."";?>>
  	<input type="submit" value="OK" name="submit">
	</form>
</body>
</html>