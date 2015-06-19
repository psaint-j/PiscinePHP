<?php
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];


if ($user != "zaz" || $pass != "jaimelespetitsponeys") {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  echo "USER OR PASS NOT FOUND";
  sleep(5);
  exit;
}

echo "<center><p>Bonjour $user.</p></center>";
?>
