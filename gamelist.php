<?php require('connect.php'); ?>
<?php require('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Of Games</title>
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

#box2
{
	background-color:#FFF;
	display:inline-block;
	width: 800px;
	text-align: center;
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
}

#body p a
{
	font-family:GeosansLight;
	font-size:20px;
	text-decoration:none;
	color:#999;
}

#body a:hover
{
	color:#666;
}

#box2 td
{
	border-top: 2px solid black;
	border-left: 2px solid black;
}

</style>
</head>

<body id="body">
<h1> List of Games </h1>

<div id="box2">
<table>
	<thead>
    	<th>Game ID</th>
        <th>Game Name</th>
        <th>Price</th>
        <th>Developer</th>
        <th>Description</th>
    </thead>
         <tbody>
	<?php 
		$sql = "SELECT * FROM game";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection)); ?>
		<?php while($row = mysqli_fetch_assoc($result)) { ?>
             <tr><td><?php echo $row["gid"]; ?></td>
             <td><?php echo $row["gname"]; ?></td>
             <td><?php echo $row["price"]; ?></td>
             <td><?php echo $row["developer"];?></td>
             <td><?php echo $row["description"];?></td>
             <td><form action='delete.php?id="<?php echo $row['gid']; ?>"' method="post">
        <input type="hidden" name="gid" value="<?php echo $row['gid']; ?>">
        <input type="submit" name="submit" value="Delete">
    </form>
</td></tr>
        <?php } ?>
        </tbody>
	</table>
</div>
<p><a href="admin.php"> Back to Admin Page </a></p>
</body>


</html>