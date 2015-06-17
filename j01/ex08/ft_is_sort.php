#!/usr/bin/php
<?PHP
function	ft_s($str)
{
	$tmp = $str;
	sort($str);

	if ($str != $tmp)
		return (false);
	else
		return (true);
}
?>
