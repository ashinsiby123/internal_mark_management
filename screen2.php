<!doctype html>
<?php
	session_start();
?>
<html>
	<center>
		<br><br>
		<head>
			<h1>LOGIN</h1>
		</head>
		<body bgcolor="dffffe">
			<form action="" method="post">
			<table cellspacing="10" cellpadding="10"> 
					<tr>
						<td>Username</td>
						<td><input type="text" name="user"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="sub" value="login"></td>
						<td></td>
					</tr>
				</table>
			</form>		
		</body>
	</center>
</html>
<?php
		if(isset($_POST["sub"]))
		{
			$name=$_POST["user"];
			$word=$_POST["pass"];
			$con=mysqli_connect("localhost","root","","internal_mark");
			$sql="select * FROM login WHERE username='$name' and password='$word';";
			$res=mysqli_query($con,$sql);
			$rescheck=mysqli_num_rows($res);
			//if($name="ashin" && $word="pass")
				if($rescheck > 0)
				{
					$_SESSION["uname"]=$name;
					header('location:screen3.php');
				}
				else
				{
					echo "username or password is wrong";
				}
		}
		else
		{
		}
?>