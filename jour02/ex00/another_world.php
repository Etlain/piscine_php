#!/usr/bin/php
<?php
	if ($argc >= 2)
	{
		$tab = preg_split("/[ \t]/", $argv[1], 0, PREG_SPLIT_NO_EMPTY);
		end($tab);
		$key = key($tab);
		foreach($tab as $k => $value)
		{
			print($value);
			if ($k != $key)
				print(" ");
		}
		print("\n");
	}
?>
