#!/usr/bin/php
<?PHP
function	ft_is_sort($str)
{
	$tmp = $str;
	sort($str);

	if ($str != $tmp)
		return (false);
	else
		return (true);
}
?>
