#!/usr/bin/php
<?php
	$nbr;
	$str = NULL;

	while (1)
	{	
		echo ("Entrez un nombre : ");
		$nbr = trim(fgets(STDIN));
		if ($nbr == NULL)
		{
			echo "^D\n";
			exit (0);
		}
		if (is_numeric($nbr) == TRUE)
		{
			if ($nbr % 2 == 0)
				echo "Le chiffre ".$nbr." est Pair\n";
			else
				echo "Le chiffre ".$nbr." est Impair\n";
		}
		else
		{
			echo "'".$nbr."' n'est pas un chiffre\n";
		}
	}
?>
