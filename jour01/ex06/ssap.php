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
				fill_word($tab[$j], $str, $nbr, $lgt_str);
				$j++;
			}
			$nbr++;
		}
		sort($tab);
		return($tab);
	}

	if ($argc < 2)
		return (NULL);
	else
	{
		$i = 1;
		$str = "";
		while ($i < $argc)
		{
			$str = $str." ".$argv[$i];
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
