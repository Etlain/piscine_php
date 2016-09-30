#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$tab = arrays();
		$nbr = 0;
		$i = 0;
		$j = 0;

		while ($str[] != '\0')
		{
			while ($str[$nbr] != ' ' && $str[$nbr] != '\0')
			{
				$tab[$i] = $str[$nbr];
				$nbr++;
				$i++;
			}
		}

	}
?>
