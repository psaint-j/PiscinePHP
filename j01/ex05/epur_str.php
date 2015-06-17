#!/usr/bin/php
<?PHP
function	ft_strlen($str)
{
	$i = 0;
	if ($str[$i] == "")
		return ($i);
	while ($str[$i] != "")
		$i++;
	return ($i);
}

function	epur_str($var)
{
	$var = array_filter(explode(" ", $var), 'ft_strlen');
	foreach($var as $elem)
	{
		echo "$elem ";
	}
	echo "\n";
}
	epur_str($argv[1]);
?>
