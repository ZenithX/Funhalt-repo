<?php 
	require('connect.php');
	require('sessiona.php');
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<style>

#body 
{
	background:#3CF;
	background: linear-gradient(180deg, rgba(51,153,204,1), rgba(0,51,255,1), rgba(0,0,255,1)) ;
	background-repeat:no-repeat;
	background-attachment:fixed;
	text-align:center;
	font-family:GeosansLight;
	font-size:36px;
	color:#FFF;
}
#content
{
	display: inline-block;
	color:#999;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	background:#FFF;
	width:70%;
	text-align:center;
	margin-top:20px;
}

#content ul
{
	display: inline-block;
}

#content li
{
	list-style:none;
	margin-top: 10px;
	margin-bottom:10px;
	display:block;
	background-color:#CCC;
	width: 750px;
	height: 150px;
	text-align:left;
}

#content a
{
	text-decoration:none;
	color:#000;
	margin-top:5px;
	margin-left:10px;
	margin-bottom:5px;
	font-family:GeosansLight;
	font-size:30px;
	display:block;
}

#content img
{
	width:120px;
	height:120px;
	float:left;
	margin-top:15px;
	margin-left:10px;
}

#content p
{
	font-family:GeosansLight;
	font-size:20px;
	color:#000;
	display:inline;
}

</style>
</head>

<body id="body">
<p> Admin Page </p>
<p> Welcome <?php echo $_SESSION['username']; ?>
<div id="content">
	<p><a href="admindetail.php"> Profile </a></p>
	<p><a href="adminregister.php"> Register a new admin </a></p>	
    <p><a href="gameregister.php"> Register a game </a></p>
    <p><a href="gamelist.php"> List of games </a></p>
    <p><a href="memberlist.php"> List of members </a></p>
    <p><a href="logout.php"> Sign Out </a></p>
</div>


</body>
</html>