<?php
	foreach ($_GET as $key => $val)
	{
		if ($key == "name")
			$name = $val;
		else if ($key == "action")
			$action = $val;
		else if ($key == "value")
			$value = $val;
	}
	if ($action == NULL || $name == NULL)
		return ;
	if ($action == "set")
		setcookie($name, $value, time() + 60 * 4);
	else if ($action == "get")
	{
		if ($_COOKIE[$name] != NULL)
			echo $_COOKIE[$name]."\n";
	}
	else if ($action == "del")
		setcookie($name, $value, time() - 4);
?>
