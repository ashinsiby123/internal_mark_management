<?php
session_start();
if(isset($_SESSION["uname"]))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Complaints</title>
</head>
<body bgcolor="dffffe">
<center>
<br><br>
<h2>COMPLAINTS</h2>
<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td>Register Number</td>
    <td>Complaint</td>
    <td>Delete</td>
  </tr>
<?php
include "database.php";
$records = mysqli_query($con,"select * from complaint");
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['reg_no']; ?></td>
    <td><?php echo $data['complaint']; ?></td>
    <td><a href="delete.php?id=<?php echo $data['com_id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</center>
<a href="screen3.php">Go to home</a>
<br><br>
<a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else {
  echo '<script type="text/javascript">alert("Access denied")</script>';
}