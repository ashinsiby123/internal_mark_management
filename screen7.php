<?php
session_start();
if(isset($_SESSION["uname"]))
{
?>
<html>
	<head>
		<title>Show score</title>
	</head>
<body bgcolor="dffffe">
	<center>
		<br><br>
		<h2>VIEW SCORE</h2>
		<form action="" method="post">
		<table cellspacing="10" cellpadding="10"> 
			<tr>
				<td>Register number</td>
				<td><input type="text" name="rg"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sub" value="submit"></td>
				<td></td>
			</tr>
</table>
		</form>
		<?php
		if(isset($_POST["sub"]))
		{
			$reg=$_POST["rg"];			
			$con=mysqli_connect("localhost","root","","internal_mark");
			$sql="SELECT mark.semesterm as sem, mark.s1internal1 as s1internal1, mark.s1cinternal1 as s1internal2, mark.s2internal1 as s2internal1, mark.s2cinternal1 as s2internal2, 
			mark.s3internal1 as s3internal1, mark.s3cinternal1 as s3internal2, mark.s1semiassi as sa1, mark.s2semiassi as sa2, mark.s3semiassi as sa3, mark.attendance as atten, 
			subject.reg_nos AS reg_nos, 
			subject.subject1 as sub1, subject.subject2 as sub2, subject.subject3 as sub3,mark.reg_nom AS reg_nom 
			FROM subject,mark WHERE subject.reg_nos=mark.reg_nom AND subject.semesters=mark.semesterm AND subject.reg_nos='$reg';";
			$sql1="select * from student where reg_no='$reg';";
			$res=mysqli_query($con,$sql);
			$res1=mysqli_query($con,$sql1);
			$rescheck=mysqli_num_rows($res);
			$rescheck1=mysqli_num_rows($res1);	
		?>
				<table border="1" cellspacing="0" cellpadding="5"> 
            <tr>
                <th width="20%">Register Number</th>
                <th width="20%">Name</th>
                <th width="17%">Department</th>
                <th width="18%">Phone number</th>
                <th width="25%">Mail_id</th>
            </tr>
			<?php
			if($rescheck1>0)
			{
				while($row=mysqli_fetch_array($res1))
				{	
					$fname=$row["name"];
					$mname=$row["mname"];
					$lname=$row["lname"];

					if($mname=='')
					{
						$naf=$fname.' '.$lname;
					}
					else
					{
						$naf=$fname.' '.$mname.' '.$lname;
					}
			?>
			<tr>
				<td><?php echo $row["reg_no"];?></td>
				<td><?php echo $naf;?></td>
				<td><?php echo $row["department"];?></td>
				<td><?php echo $row["phone_number"];?></td>
				<td><?php echo $row["mail_id"];?></td>
			</tr>
			<?php
				}
			}
			else
				{
					echo "no student found";
				}
		    ?>
        </table>
		<br>
		<br>
		<table border="1" cellspacing="0" cellpadding="5"> 
			<tr>
				  <th width="15%">Semester</th>
                  <th width="15%">Subject1</th>
                  <th width="10%">Mark1</th>
                  <th width="15%">Subject2</th>
                  <th width="10%">Mark2</th>
                  <th width="15%">Subject3</th>
                  <th width="10%">Mark3</th>
                  <th width="10%">Grade</th>
			</tr>
			<?php
			if($rescheck>0)
			{
				while($row=mysqli_fetch_array($res))
				{	
					$s1internal1=$row["s1internal1"];
					$s1internal2=$row["s1internal2"];
					$s2internal1=$row["s2internal1"];
					$s2internal2=$row["s2internal2"];
					$s3internal1=$row["s3internal1"];
					$s3internal2=$row["s3internal2"];
					$sa1=$row["sa1"];
					$sa2=$row["sa2"];
					$sa3=$row["sa3"];
					$atten=$row["atten"];
					$mark1=(($s1internal1)/16)+(($s1internal2)/16)+($sa1)+($atten);
					$mark2=(($s2internal1)/16)+(($s2internal2)/16)+($sa2)+($atten);
					$mark3=(($s3internal1)/16)+(($s3internal2)/16)+($sa3)+($atten);

					$avg=($mark1+$mark2+$mark3)/3;

					if($avg>=18)
					{
						$gr='a';
					}
					elseif($avg>=16)
					{
						$gr='b';
					}
					elseif($avg>=14)
					{
						$gr='c';
					}
					else {
						$gr='d';
					}
			?>
			<tr>
				<td><?php echo $row["sem"];?></td>
				<td><?php echo $row["sub1"];?></td>
				<td><?php echo $mark1;?></td>
				<td><?php echo $row["sub2"];?></td>
				<td><?php echo $mark2;?></td>
				<td><?php echo $row["sub3"];?></td>
				<td><?php echo $mark3;?></td>
				<td><?php echo $gr;?></td>
			</tr>
			<?php
				}
			}
			else
				{
					echo '<script type="text/javascript">alert("No Student Found in this Register Number")</script>';
				}
		    ?>
        </table>
        <?php
        }
		else
		{
		}
		?>
	</center>
<a href="screen3.php">Back to home page</a>
	<br>
<a href="logout.php">logout</a>
</body>
</html>	
<?php
}
else
{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>