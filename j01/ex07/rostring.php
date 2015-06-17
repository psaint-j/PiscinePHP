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

function	rostring($var)
{
	$var = array_filter(explode(" ", $var), 'ft_strlen');
	$i = 1;
	while($var[$i])
	{
		$i++;
	}
	if ($i > 1)
	{
		$var[$i] = $tmp;
		$var[$i] = $var[0];
		$var[0] = $tmp;
		foreach($var as $new)
		{
			if ($new)
				echo "$new ";
		}
		echo "\n";
	}
	else if ($var)
		echo "$var[0]\n";
}
rostring($argv[1]);
?>
