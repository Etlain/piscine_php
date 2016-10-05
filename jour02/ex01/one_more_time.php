#!/usr/bin/php
<?php
	date_default_timezone_set("Europe/Paris");
	function nbr_month($str)
	{
		if (strcasecmp($str, "janvier") == 0)
			return (1);
		else if (strcasecmp($str, "fevrier") == 0)
			return (2);
		else if (strcasecmp($str, "mars") == 0)
			return (3);
		else if (strcasecmp($str, "avril") == 0)
			return (4);
		else if (strcasecmp($str, "mai") == 0)
			return (5);
		else if (strcasecmp($str, "juin") == 0)
			return (6);
		else if (strcasecmp($str, "juillet") == 0)
			return (7);
		else if (strcasecmp($str, "aout") == 0)
			return (8);
		else if (strcasecmp($str, "septembre") == 0)
			return (9);
		else if (strcasecmp($str, "octobre") == 0)
			return (10);
		else if (strcasecmp($str, "novembre") == 0)
			return (11);
		else if (strcasecmp($str, "decembre") == 0)
			return (12);
		return (0);
	}

	function wrong_format($i, $val)
	{
		if ($i == $val)
		{
			print("Wrong Format\n");
			exit (0);
		}
	}
	if ($argc != 2)
		return ;
	$i = preg_match("/  |^ | $/", $argv[1]);
	wrong_format($i, 1);
	$tab = preg_split("/ /", $argv[1]);
	if (count($tab) != 5)
		wrong_format(1, 1);
	$i = preg_match("/^[Ll]undi$|^[Mm]ardi$|^[Mm]ercredi$|^[Jj]eudi$|^[Vv]endredi$|^[Ss]amedi$|^[Dd]imanche$/", $tab[0]);
	wrong_format($i, 0);
	$i = preg_match("/^[0-2]?[0-9]$|^[3]?[0-1]$/", $tab[1]);
	if ($tab[$i] == "00")
		wrong_format(0, 0);
	wrong_format($i, 0);
	$i = preg_match("/^[Jj]anvier$|^[Ff][e]vrier$|^[Mm]ars$|^[Aa]vril$|^[Mm]ai$|^[Jj]uin$|^[Jj]uillet$|^[Aa]o[u]t$|^[Ss]eptembre$|^[Oo]ctobre$|^[Nn]ovembre$|^[Dd][e]cembre$/", $tab[2]);
	wrong_format($i, 0);
	$i = preg_match("/^[0-9]{4}$/", $tab[3]);
	wrong_format($i, 0);
	$i = preg_match("/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/", $tab[4]);
	wrong_format($i, 0);
	$month = nbr_month($tab[2]);
	$heure = explode(":", $tab[4]);
	$nbr =mktime($heure[0], $heure[1], $heure[2], $month, $tab[1], $tab[3]);
	echo ($nbr."\n");
?>
