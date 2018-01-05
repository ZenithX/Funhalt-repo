<?php 
	require('connect.php');
	require('session.php');
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM admin WHERE username = '".$username."'" ;
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($row = mysqli_fetch_assoc($result))
	{
 		echo $row['username'];
	}
		?>'s Details</title>
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

#body p a
{
	font-family:GeosansLight;
	font-size:20px;
	text-decoration:none;
	color:#FFF;
}

#body a:hover
{
	color:#999;
}

#body h1
{
	font-family:GeosansLight;
	font-size:35px;
	color:#FFF;
}
#content
{
	display: inline-block;
	color:#000;
	font-family:GeoSansLight;
	font-size:30px;
	background:#FFF;
	width:70%;
	margin-top:20px;
}

#content p a
{
	color:#000;
}

#navcontainer
{
	display:inline-block;
	background: rgba(255,255,255,0.5); 
	height:60px;
	margin:0;
	padding:0;
	overflow:hidden;
	z-index:10;
	width:100%;
}

#navlist
{
	margin: 0;
	font-family:GeoSansLight;
	font-size:30px;
	background: rgba(255,255,255,0.5); 
	text-align:left;
	height:60px;
	width:97%;
	z-index:10;
	box-shadow:0px 2px 5px #000;
}

#navlist ul, #navlist li
{
margin: 0;
padding: 0;
display: inline;
list-style-type: none;
}

#navlist a:link, #navlist a:visited
{
float: right;
line-height: 14px;
font-weight: bold;
margin: 0 10px 4px 10px;
text-decoration: none;
color: #999;
padding-top:20px;
}

#navlist a:link#current, #navlist a:visited#current, #navlist a:hover
{
border-bottom: 2px solid #9cf;
padding-bottom: 25px;
color: #9cf;
}

#navlist a:hover { color: #0F6; }

#navimg
{
	padding-top:7px;
}

</style>
</head>

<body id="body">

<div id="content">
	<p> Username: <?php echo $row['username']?> </p>
    <p> First Name: <?php echo $row['Fname']?></p>
    <p> Last Name: <?php echo $row['Lname']?></p>
    <p> Email: <?php echo $row['Email']?></p>
</div>
<p><a href="admin.php"> Back to Admin Page </a></p>
<p><a href="logout.php"> Log out </a></p>
</body>
</html>