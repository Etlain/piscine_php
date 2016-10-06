<?php
	$pw = $_SERVER['PHP_AUTH_PW'];
	$usr = $_SERVER['PHP_AUTH_USER'];
	if ( $usr == "zaz" &&  $pw == "jaimelespetitsponeys")
	{
?>
	<html><body>Bonjour Zaz<br />
<?php
	$str = file_get_contents("../img/42.png");
	$img = base64_encode($str);
	echo '<img src="data:image/png;base64,'.$img.'"';
?>

</body></html>
<?php
	}
	else
	{
		header("HTTP/1.0 401 Unauthorized");
		header("WWW-Authenticate: Basic realm=''Espace Membres''");
?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php
	}
?>
