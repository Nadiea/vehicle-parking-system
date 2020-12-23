<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

$id=$_GET['rn'];
$query = "DELETE FROM vehicleinfo WHERE id = '$id'";
$query=mysqli_query($con,$query);
if($query)
{
    echo "<h1><font color='green'>customer exit the parking place</h1>";
}
else
{
    
echo "<h1><font color='red'>failed customer exit the parking place</h1>";
}
?>