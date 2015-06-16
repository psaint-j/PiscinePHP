#!/usr/bin/php
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
?>
