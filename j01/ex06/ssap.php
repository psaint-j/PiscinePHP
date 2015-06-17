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

function	ssap($var)
{
	$var = implode(" ", $var);
	$var = array_filter(explode(" ", $var), 'ft_strlen');
	sort($var);
	foreach ($var as $elem)
	{
		echo "$elem\n";
	}
}
	unset($argv[0]);
	ssap($argv);
?>
