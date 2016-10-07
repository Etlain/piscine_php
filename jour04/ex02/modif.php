<?php
if ($_POST['submit'] == "OK" && $_POST['oldpw'] !== '' && $_POST['login'] !== '' && $_POST['newpw'] !== '')
{
	if (!file_exists("../private"))
		echo "ERROR\n";
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
				$pass = hash("whirlpool", hash("gost", 'chocolat'.$_POST['oldpw']));
				if ($tab[$i]['passwd'] !== $pass)
				{
					echo ("ERROR\n");
					return ;
				}
				else
					break ;
			}
			else
			{
				echo ("ERROR\n");
				return ;
			}
			$i++;
		}
		$pass = hash("whirlpool", hash("gost", 'chocolat'.$_POST['newpw']));
		$tab[$i]['passwd'] = $pass;
		$str = serialize($tab);
		file_put_contents("../private/passwd", $str);
		echo 'OK'."\n";
		return ;
	}
	else
		echo ("ERROR\n");
}
else
	echo ("ERROR\n");
?>
