<?php
session_start();
if(isset($_SESSION["puname"]))
{
?>
<html>
<body bgcolor="dffffe">
<head>
	<br><br>
<center>
	<h2>INPUT COMPLAINT</h2>	
</head>

<body>
<form action="" method="post">
<table cellspacing="10" cellpadding="10"> 
<tr>
	<td>Register number</td>
	<td><input type="text" name="rg"></td>
</tr>
<tr>
	<td>Enter complaint</td>
	<td><textarea id="text-area" name="com">
</textarea></td>
</tr><tr>
	<td></td>
	<td><input type="submit" name="sub" value="Submit"></td>
	<td></td>
</table>
</form>
</body>
</center>
</html>
<?php
if(isset($_POST["sub"]))
{
	$reg=$_POST["rg"];
    $pcom=$_POST["com"];
	$dt = date('Y-m-d');
	$con=mysqli_connect("localhost","root","","internal_mark");
	$sql1="select reg_no from student where reg_no='$reg';";
	$res1=mysqli_query($con,$sql1);
	$rescheck=mysqli_num_rows($res1);
	if($rescheck>0)
	{
	$sql="insert into complaint(date,reg_no,complaint) values('$dt','$reg','$pcom')";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo '<script type="text/javascript">alert("entered")</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("not entered")</script>';
	}
}
else{
	echo '<script type="text/javascript">alert("no student is registered in this register number")</script>';
}
}
else
{
	
}
?>
<html>
	<a href="studhome.php">Back to home page</a>
	<br><br>
	<a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>