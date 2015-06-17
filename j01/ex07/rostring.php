#!/usr/bin/php
<?PHP
function	rostring($var)
{
	$var = array_filter(explode(" ", $var), 'strlen');
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
