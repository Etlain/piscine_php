#!/usr/bin/php
<?php
	/*if (argc != 2)
		return ;*/
	function remplace($value, $begin, $end)
	{
		
	}

	$tab = file("test.html");
	//substr_replace
	//strtoupper
	$b = FALSE;
	foreach ($tab as $value)
	{
		if ($b == FALSE)
		{
			print($i."\n");
			$begin = strpos($value, "<a");
			if ($end != FALSE)
				$b = TRUE;
		}
		if ($b == TRUE)
		{
			$end = strpos($value, "</a>");
			if ($end != FALSE)
			{
				//remplace();
				$b = FALSE;
			}
		}
		print($value);
	}
?>
