<?php require('connect.php'); ?>
<?php require('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Of Users</title>
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
<h1> List of Users </h1>

<div id="box2">
<table>
	<thead>
    	<th>User ID</th>
        <th>Username</th>
        <th>User First Name</th>
        <th>User Last Name</th>
        <th>User E-mail</th>
    </thead>
         <tbody>
	<?php 
		$sql = "SELECT * FROM user";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection)); ?>
		<?php while($row = mysqli_fetch_assoc($result)) { ?>
             <tr><td><?php echo $row["UID"]; ?></td>
             <td><?php echo $row["username"]; ?></td>
             <td><?php echo $row["Fname"]; ?></td>
             <td><?php echo $row["Lname"];?></td>
             <td><?php echo $row["email"];?></td>
             <td><form action='deleteuser.php?id="<?php echo $row['UID']; ?>"' method="post">
        <input type="hidden" name="uid" value="<?php echo $row['UID']; ?>">
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