#!/usr/bin/php
<?PHP
$i = '"';
while (1)
{
	echo "entrez un nombre: ";
	$input = fgets(STDIN);
	if ($input == FALSE)
		exit;
	$input = trim($input,"\n");
	if ($input%2 == 0 && is_numeric($input))
		echo "le nombre $input est pair\n";
	else if ($input%2 != 0 && is_numeric($input))
		echo "le nombre $input est impair\n";
	else if (!is_numeric($input))
		echo "$i$input$i n'est pas un nombre\n";
}
?>
