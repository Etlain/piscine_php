<?php
	
	function auth($login, $passwd)
	{
		if ($login === NULL && $passwd === NULL)
			return (FALSE);
		$str = file_get_contents("../private/passwd");
		$tab = unserialize($str);
		$i = 0;
		$lgt = count($tab);
		while ($i < $lgt)
		{
			if ($tab[$i]['login'] === $login)
			{
				$pass = hash("whirlpool", hash("gost", 'chocolat'.$passwd));
				if ($tab[$i]['passwd'] === $pass)
					return (TRUE);
				else
					return (FALSE);
			}
			$i++;
		}
		return (FALSE);
	}

?>
