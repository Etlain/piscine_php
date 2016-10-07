<?php
if ($_POST['submit'] == "OK" && $_POST['passwd'] !== '' && $_POST['login'] !== '')
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (file_exists("../private/passwd"))
	{
		$file = file_get_contents("../private/passwd");
		$tab = unserialize($file);
		$lgt = count($tab);
		$i = 0;
		while ($i < $lgt)
		{
			if ($tab[$i]['login'] === $_POST['login'])
			{
				echo ("ERROR\n");
				return ;
			}
			$i++;
		}
		$tab[$lgt]['login'] = $_POST['login'];
		$pass = hash("whirlpool", hash("gost", 'chocolat'.$_POST['passwd']));
		$tab[$lgt]['passwd'] = $pass;
		$str = serialize($tab);
		file_put_contents("../private/passwd", $str);
		echo 'OK'."\n";
		return ;
	}
	else
	{
		$i = 0;
		$tab[$i]['login'] = $_POST['login'];
		$pass = hash("whirlpool", hash("gost", 'chocolat'.$_POST['passwd']));
		$tab[$i]['passwd'] = $pass;
		$str = serialize($tab);
		file_put_contents("../private/passwd", $str);
		echo 'OK'."\n";
	}
}
else
	echo ("ERROR\n");
?>
