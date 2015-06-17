#!/usr/bin/php
<?PHP
function	epur_str($var)
{
	$var = array_filter(explode(" ", $var), 'strlen');
	foreach($var as $elem)
	{
		echo "$elem ";
	}
	echo "\n";
}
	epur_str($argv[1]);
?>
