<?php
if(!isset($_SESSION['username'])){
mysqli_close($connection); 
header('Location: login.php');
}
?>