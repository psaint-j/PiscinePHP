<?php
$user = "zaz";
$pass = "jaimelespetitsponeys";
if (!$_SERVER['PHP_AUTH_USER'])
{
	header('WWW-Authenticate: Basic realm=""');
	header('HTTP/1.0 401 Unauthorized');
}
else
{
	if($_SERVER['PHP_AUTH_USER'] === $user &&  $_SERVER['PHP_AUTH_PW'] === $pass)
	{
			$file = base64_encode(file_get_contents("../img/42.png"));
			echo "<html><body>Bonjour Zaz<br />\n<img src='data:image/png;base64,$file'>\n</body></html>\n";
	}
	else
	{
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
	}
}
?>
