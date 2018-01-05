<?php
include ('connect.php');

$query = "DELETE FROM user WHERE UID='".$uid."'";

mysqli_query ($connection,$query);

header('Location: memberlist.php');
?>