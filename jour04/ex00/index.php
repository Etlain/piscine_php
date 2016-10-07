<?php
	session_start();
	if ($_GET["passwd"] != NULL && $_GET["login"] != NULL && $_GET["submit"] != NULL)
	{
		echo 'get pass..';
		$_SESSION['passwd'] = $_GET['passwd'];
		$_SESSION['login'] = $_GET['login'];
	}
	$log = $_SESSION['login'];
	$pwd = $_SESSION['passwd'];
?>
<html>
<body>
<form action="index.php" method="get">
login<span style="margin-left:32px;">:</span> <input type="text" name="login" value="<?php echo $log; ?>" required="required">
	<br />
	<br />
	password : <input type="password" name="passwd" value="<?php echo $pwd; ?>" required="required">
	<br />
	<br />
	<input type="submit" name="submit" value="OK">
</form>
</body>
</html>
