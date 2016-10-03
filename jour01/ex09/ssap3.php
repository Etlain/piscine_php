#!/usr/bin/php
<?PHP
	
	function diff($funct, $str, $str2)
	{
		
	}

	function ft_strcmp2($str, $str2)
	{
		$i = 0;
		$lgt = strlen($str);
		while ($i < $lgt && $str[$i] == $str2[$i])
			$i++;
		if ($str[$i] != $str2[$i])
		{
			if (ctype_alpha($str[$i]))
				$str[$i] + 1000;
			else if (is_numeric($str[$i]))
				$str[$i] + 2000;
			else
				$str[$i] + 3000;
			if (ctype_alpha($str2[$i]))
				$str2[$i] + 1000;
			else if (is_numeric($str2[$i]))
				$str2[$i] + 2000;
			else
				$str2[$i] + 3000;
			if ($str[$i] > $str2[$i])
				return (-1);
			else if ($str[$i] < $str2[$i])
				return (1);
		}
		return (0);
	}
	/*
	function cmp($str, $str2)
	{
		return(strnatcasecmp($str, $str2));
	}*/

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
				fill_word($tab[$j], $str, $nbr, $lgt_str);
				$j++;
			}
			$nbr++;
		}
		usort($tab, "ft_strcmp2");
		return($tab);
	}
	if ($argc < 2)
		return (NULL);
	else
	{
		$i = 1;
		$str = "";
		/*print($argv[1]);*/
		while ($i < $argc)
		{
			$str = $str." ".$argv[$i];
			//print($str."\n");
			$i++;
		}
		$tab = ft_split2($str);
		$max = count($tab);
		$i = 0;
		while ($i < $max)
		{
			print($tab[$i]."\n");
			$i++;
		}
	}
?>
