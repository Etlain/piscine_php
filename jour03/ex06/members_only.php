<?php
	$pw = $_SERVER['PHP_AUTH_PW'];
	$usr = $_SERVER['PHP_AUTH_USER'];
	if ( $usr == "zaz" &&  $pw == "jaimelespetitsponeys")
	{
	}
	else
	{
		header("HTTP/1.0 404 NOT FOUND");
?>
<html><body>Cette zone est uniquement accessible aux membres du site</body></html>
<?php
		exit (0);
	}
?>
<html><body>Bonjour Zaz<br />
<?php
$str = file_get_contents("../img/42.png");
$img = base64_encode($str);
echo '<img src="data:image/png;base64,'.$img.'"';
?>

</body></html>
