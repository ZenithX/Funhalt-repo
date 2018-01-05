<?php 
require ('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$uid = $_POST['uid'];

$sql = "UPDATE user SET username = '$username', password = '$password' WHERE UID = '$uid'";
$result = mysqli_query($connection,$sql);

if ($result)
{
	echo "Update Success";
	?> <a href="memberdetail.php"> Back to Member Page </a> <?php
}
else
{
	echo "Update Failed";
}

?>

