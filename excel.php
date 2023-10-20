<?php
session_start();
if(isset($_SESSION["uname"]))
{
include 'database.php';
?>
<html>
  <head>
    <title>Upload file</title>
</head>
<body bgcolor="dffffe">
  <center>
    <br><br>
  <table cellspacing="10" cellpadding="10"> 
  <form method="post" action="file-upload.php" enctype="multipart/form-data">
    <tr>
      <td></td>
      <td><h2>UPLOAD FILE</h2></td>
      <td></td>
</tr>

    <tr>
      <td>Choose File</td>
      <td><input type="file" name="uploadfile"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit"></td>
      <td></td>
    </tr>
</table>
</form>
</center>
<a href="screen3.php">Go to home page</a>
<br><br>
<a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else {
  echo '<script type="text/javascript">alert("Access denied")</script>';
}