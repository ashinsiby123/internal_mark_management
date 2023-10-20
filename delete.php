<?php
include "database.php"; 
$id= $_GET['id'];
$del = mysqli_query($con,"delete from complaint where com_id = '$id'");
if($del)
{
    header("location:screen8.php");	
}
else
{
    echo "Error deleting record"; 
}
?>