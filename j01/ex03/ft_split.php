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
	sort($str);
	return ($str);
}
?>
