<?php
session_start();
if(isset($_SESSION["puname"]))
{
?>
<html>
	<head>
		<title>Home</title>
</head>
	<body bgcolor="dffffe">
	<center>
		<br>
		<b><h1>HOME</h1></b>
		<br>
		<a href="screen5.php">Input complaints</a>
	</center>
<a href="logout.php">Logout</a>
</body
</html>
<?php
}
else
{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>
