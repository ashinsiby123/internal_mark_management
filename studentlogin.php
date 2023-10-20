<?php
session_start();
?>
<html>
	<body bgcolor="dffffe">
	<center>
	<br><br>
	<h1>STUDENT LOGIN</h1>
	<form action="" method="post">
	<table cellspacing="10" cellpadding="10"> 
			<tr>
				<td>Username</td>
				<td><input type="text" name="stus"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="stpw"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sub" value="login"></td>
				<td></td>
			</tr>	
		</table>
	</form>
	</center>
</body>
</html>
<?php
if(isset($_POST["sub"]))
{
	$pstud=$_POST["stus"];
	$pstpw=$_POST["stpw"];
	$con=mysqli_connect("localhost","root","","internal_mark");
	$sql="select * from studlogin where username='$pstud' and password='$pstpw';";
	$res=mysqli_query($con,$sql);
	$rescheck=mysqli_num_rows($res);
	if($rescheck>0)
	{
		$_SESSION["puname"]=$pstud;
		header('location:studhome.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("Username or password is wrong")</script>';
	}
}
else
{
}
?>
