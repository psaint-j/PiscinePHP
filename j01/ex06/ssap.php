#!/usr/bin/php
<?PHP
function	ssap($var)
{
	$var = implode(" ", $var);
	$var = array_filter(explode(" ", $var), 'strlen');
	sort($var);
	foreach ($var as $elem)
	{
		echo "$elem\n";
	}
}
	unset($argv[0]);
	ssap($argv);
?>
