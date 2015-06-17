#!/usr/bin/php
<?PHP
function	ft_strlen($arg)
{
	$i = 0;
	if ($i == "")
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

print_r(ft_split("oigioeg goieirojgio    0  000 0jgwnje  88998995 			rngjk0		0	");
?>
