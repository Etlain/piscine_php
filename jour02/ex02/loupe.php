#!/usr/bin/php
<?php
	function maj($value, $lim, $lim2)
	{
		$begin = strpos($value, $lim);
		if ($lim === 'title="')
			$begin += 7;
		if ($begin == FALSE)
				return NULL;
		$end = strpos($value, $lim2, $begin);
		if ($end == FALSE)
				return NULL;
		$str = substr($value, $begin, $end - $begin);
		$str = strtoupper($str);
		$value = substr_replace($value, $str, $begin, $end - $begin);
		return ($value);
	}
	function remplace($str, $begin, $end)
	{
		$val = substr($str, $begin, $end - $begin);
		//print($value);
		$value = maj($val, ">", "<");
		if ($value == NULL)
			return ($str);
		//print($value);
		$str = substr_replace($str, $value, $begin, $end - $begin);
		$val = substr($str, $begin, $end - $begin);
		$value = maj($val, 'title="', '"');
		if ($value == NULL)
			return ($str);
		//print($value);
		$str = substr_replace($str, $value, $begin, $end - $begin);
		return($str);
	}
	if ($argc != 2)
		return ;
	$str = file_get_contents($argv[1], FALSE, NULL, 0);
	if ($str == NULL)
		return ;
	//print($str);
	$i = 0;
	$lgt = strlen($str);
	while ($i < $lgt)
	{
		$begin = strpos($str, "<a", $i);
		//print($begin."\n");
		if ($begin == FALSE)
				break;
		$i = $begin;
		$end = strpos($str, '</a>', $i);
		//print($end);
		if ($end == FALSE)
				break;
		$i = $end;
		$str = remplace($str, $begin, $end + 1);
		if ($nbr = strpos($str, ">", $begin) == FALSE)
			break ;
		if ($nbr > $end)
			break ;
	}
	print($str);
?>
