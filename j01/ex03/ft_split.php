#!/usr/bin/php
<<<<<<< HEAD
<?php
function	ft_strlen($str)
{
	$i = 0;
	if ($str[$i] == "")
		return ($i);
	while ($str[$i] != "")
		$i++;
	return ($i);
}

function	ft_split($str)
{
	$str = array_filter(explode(" ", $str), 'ft_strlen');
	$i = 0;
	while ($str[$i])
	{
		$str[i] = trim($str[$i]);
		$i++;
	}
	sort($str);
	return ($str);
}

print_r(ft_split("oigioeg goieirojgio    0  000 0jgwnje  88998995 			rngjk0		0	"));
=======
<?PHP
if ($argv[1] && $argv[2])
{
	$c = $argv[1];
	$str = $argv[2];
	$var_tab = explode($c, $str);
	print_r($var_tab);
	foreach ($var_tab as $elem)
	{
		if ($elem)
		{
			$tab = array($elem);
			echo "$elem\n";
			$tab++;
		}
	}
	print_r($tab);
}
>>>>>>> 6b86578bc9b7e845d1284268f3d522b7ab2caccc
?>
