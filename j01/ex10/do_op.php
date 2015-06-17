#!/usr/bin/php
<?php
	function 	check_params($argc)
	{
		if ($argc != 4)
		{
			echo "Incorrect Parameters"."\n";
			exit(0);
		}
	}
	function  	calcul($argv_1, $argv_op, $argv_2)
	{
		if ($argv_op == "+")
			echo ($argv_1 + $argv_2);
		if ($argv_op == "-")
			echo ($argv_1 - $argv_2);
		if ($argv_op == "*")
			echo ($argv_1 * $argv_2);
		if ($argv_op == "/")
			echo ($argv_1 / $argv_2);
		if ($argv_op == "%")
			echo ($argv_1 % $argv_2);
	}
	check_params("$argc");
	calcul($argv[1], trim($argv[2]), $argv[3]);
	echo "\n";
?>