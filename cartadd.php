<?php 
	require('connection.php');
    $gid = $_POST['gid'];
	$sql = "SELECT * from game where gid = '$gid'";
	$result = mysqli_query($connection,$sql);
	
?>