<html>
	<body bgcolor="dffffe">
		<center>
			<br>
			<b><h1>HOME</h1></b>
			<br>
		</center>
</html>
<?php
session_start();
if(isset($_SESSION["uname"]))
{
	echo '<center>';
	echo '<a href="screen4.php">Input internal mark</a>';
	echo '<br><br>';
	echo '<a href="screen6.0.php">Generate score card</a>';
	echo '<br><br>';
	echo '<a href="screen7.php">View Score</a>';
	echo '<br><br>';
	echo '<a href="screen8.php">view complaints</a>';
	echo '<br><br>';
	echo '<a href="excel.php">Upload mark</a>';
	echo '<br><br>';
	echo '</center>';
}
else
{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>
<html>
		<a href="logout.php">Logout</a>
	</body>
</html>