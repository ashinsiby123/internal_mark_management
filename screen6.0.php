<?php
session_start();
if(isset($_SESSION["uname"]))
{
?>
<html>
    <head>
        <title>Pdf generation</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
    </head>
    <body bgcolor="dffffe">
<center>
<br><br>

    <h2>GENERATE SCORE CARD</h2>
        <form action="screen6.1.php" method="POST">
		<table cellspacing="10" cellpadding="10"> 
                <tr>
            <td>Register number</td><td><input type="text" name="reg"></td>
</tr>
     <tr>
         <td></td>
         <td><input type="submit" name="sub" class="btn btn-danger" value="submit"></td>
         <td></td>
</tr>
</table>
        </form>
</center>
    </body>
    <a href="screen3.php">Back to home</a>
    <br>
    <br>
    <a href="logout.php">Logout</a>
</html>
<?php
}
else
{
	echo '<script type="text/javascript">alert("Access denied")</script>';
}
?>



