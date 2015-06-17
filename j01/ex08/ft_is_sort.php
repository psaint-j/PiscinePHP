#!/usr/bin/php
<?PHP
function	ft_split($str)
{
	$str = array_filter(explode(" ", $str), 'strlen');
	sort($str);
	return ($str);
}
?>
