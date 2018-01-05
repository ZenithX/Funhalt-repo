<?php
include ('connect.php');

$query = "DELETE FROM game WHERE gid='".$gid."'";

mysqli_query ($connection,$query);

header('Location: gamelist.php');
?>