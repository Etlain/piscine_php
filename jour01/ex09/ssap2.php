#!/usr/bin/php
<?PHP
	function fill_word(&$tab, $str, &$nbr, $max)
	{
		while ($nbr < $max && $str[$nbr] != ' ')
		{
			$tab = $tab.$str[$nbr];
			$nbr++;
		}
	}

	function ft_split2($str)
	{	
		if($str == NULL)
			return (NULL);
		$nbr = 0;
		$j = 0;
		$lgt_str = strlen($str);
		while ($nbr < $lgt_str)
		{
			if ($str[$nbr] != ' ' && $nbr < $lgt_str)
			{
				if (ctype_digit($str[$nbr]) == TRUE)
					fill_word($tab[0][$j], $str, $nbr, $lgt_str);
				else if (ctype_alpha($str[$nbr]) == TRUE)
					fill_word($tab[1][$j], $str, $nbr, $lgt_str);
				else
					fill_word($tab[2][$j], $str, $nbr, $lgt_str);
				$j++;
			}
			$nbr++;
		}
		$j = 0;
		while ($j < 3)
		{
			if ($tab[$j] != NULL)
			sort($tab[$j], SORT_STRING | SORT_FLAG_CASE);
			$j++;
		}
		return($tab);
	}
	
	function my_print($tab)
	{
		$max = count($tab);
		$i = 0;
		while ($i < $max)
		{
			print($tab[$i]."\n");
			$i++;
		}
	}
	if ($argc < 2)
		return (NULL);
	else
	{
		$i = 1;
		$str = "";
		print($argv[1]);
		/*while ($i < $argc)
		{
			$str = $str." ".$argv[$i];
			print($str."\n");
			$i++;
		}
		$tab = ft_split2($str);
		$i = 0;
		while ($i < 3)
		{
			if ($tab[$i] != NULL)
				my_print($tab[$i]);
			$i++;
		}*/
	}
?>
