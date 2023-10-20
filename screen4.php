<!doctype html>
<?php
session_start();
if(isset($_SESSION["uname"]))
{
?>
<html>
	<head>
		<title>Input mark</title>
</head>
<body bgcolor="dffffe">
	<center>
		<br><br>
		<h2>INPUT MARK</h2>
		<form action="" method="post">
		<table cellspacing="10" cellpadding="10"> 
				<tr>
					<td>Register number </td>
					<td></td>
					<td><input type="text" name="re"></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td></td>
					<td><input type="text" name="sem"></td>
				</tr>
				<tr>
					<td>Subject-1</td>
					<td></td>
					<td><input type="text" name="sub1"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr1"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr2"></td>
				</tr>
				<tr>
					<td>Assingment<input type="radio" name="assign" value="1"></td>
					<td></td>
					<td>Seminar<input type="radio" name="assign" value="0"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type='text' name='semi1'></td>
				</tr>
				<tr>
					<td>Subject-2</td>
					<td></td>
					<td><input type="text" name="sub2"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr21"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr22"></td>
				</tr>
				<tr>
					<td>Assingment<input type="radio" name="tassign" value="1"></td>
					<td></td>
            		<td>Seminar<input type="radio" name="tassign" value="0"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="semi2"></td>
				</tr>
				<tr>
					<td>Subject-3</td>
					<td></td>
					<td><input type="text" name="sub3"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr31"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr32"></td>
				</tr>
				<tr>
					<td>Assingment<input type="radio" name="thassign" value="1"></td>
					<td></td>
					<td>Seminar<input type="radio" name="thassign" value="0"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="semi3"></td>
				</tr>
				<tr>
					<td>Subject-4</td>
					<td></td>
					<td><input type="text" name="sub4"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr41"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="intr42"></td>
				</tr>
				<tr>
					<td>Assingment<input type="radio" name="th4assign" value="1"></td>
					<td></td>
					<td>Seminar<input type="radio" name="th4assign" value="0"></td>
				</tr>
				<tr>
					<td>Mark</td>
					<td></td>
					<td><input type="text" name="semi4"></td>
				</tr>
				<tr>
					<td>Attendance</td>
					<td></td>
					<td><input type="text" name="atte"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="sub" value="submit"></td>
					<td></td>
				</tr>
			</table>
		</form>
</center>
</html>
<?php
if(isset($_POST["sub"]))
{
	$reg=$_POST["re"];
	$seme=$_POST["sem"];
	$subj1=$_POST["sub1"];
	$subj2=$_POST["sub2"];
	$subj3=$_POST["sub3"];
	$subj4=$_POST["sub4"];
	$passign=$_POST['assign'];
	$ptassign=$_POST['tassign'];
	$pthassign=$_POST['thassign'];
	$pth4assign=$_POST['th4assign'];

	$pintr1=$_POST["intr1"];
	$pintr2=$_POST["intr2"];
	$psemi1=$_POST["semi1"];

	$pintr21=$_POST["intr21"];
	$pintr22=$_POST["intr22"];
	$psemi2=$_POST["semi2"];

	$pintr31=$_POST["intr31"];
	$pintr32=$_POST["intr32"];
	$psemi3=$_POST["semi3"];

	$pintr41=$_POST["intr41"];
	$pintr42=$_POST["intr42"];
	$psemi4=$_POST["semi4"];

	$patte=$_POST["atte"];

	$con5=mysqli_connect("localhost","root","","internal_mark");
	$sql5="select reg_no from student where reg_no='$reg';";
	$res5=mysqli_query($con5,$sql5);
	$rcheck=mysqli_num_rows($res5);
	if($rcheck>0)
	{
	$con=mysqli_connect("localhost","root","","internal_mark");
	$sql="select reg_nom, semesterm FROM mark WHERE reg_nom='$reg' and semesterm='$seme';";
	$res=mysqli_query($con,$sql);
	$rescheck=mysqli_num_rows($res);
	if($rescheck<1)
	{
		$sql2="insert into mark values ('$reg','$seme','$pintr1','$pintr2','$psemi1','$pintr21','$pintr22','$psemi2','$pintr31','$pintr32','$psemi3','$pintr41','$pintr42','$psemi4','$patte');";
		$res2=mysqli_query($con,$sql2);
		
	}
	else
	{
		echo "Already inserted into mark table";
	}
	$con1=mysqli_connect("localhost","root","","internal_mark");
	$sql3="select * FROM subject WHERE reg_nos='$reg' and semesters='$seme';";
	$res3=mysqli_query($con1,$sql3);
	$rescheck2=mysqli_num_rows($res3);
	if($rescheck2<1)
	{
		$sql4="insert into subject values ('$reg','$seme','$subj1','$subj2','$subj3','$sub4');";
		$res4=mysqli_query($con1,$sql4);
	}
	else
	{
		echo '<br>';
		echo "Already inserted into subject table";
	}
}
else
{
	echo "student is not registered";
}
if($res4 && $res2)
{
	echo '<script type="text/javascript">alert("Entered")</script>';
}
else {
	echo '<script type="text/javascript">alert("Not Entered")</script>';
}
}
else
{

}
?>
<html>
	<br>
	<a href="screen3.php">Back to home page</a>
	<br><br>
	<a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else
{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>