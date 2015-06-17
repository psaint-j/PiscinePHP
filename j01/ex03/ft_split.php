#!/usr/bin/php
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
?>
