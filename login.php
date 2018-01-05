<?php
	
	require('connect.php');
	
	if(isset($_POST) & !empty($_POST))
	{
  		$username = mysqli_real_escape_string($connection, $_POST['username']);
  		$password = md5($_POST['password']);
  	}

	if (isset($_POST['username']) and isset($_POST['password']))
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];
				
		$login = mysqli_query($connection,"select * from admin where username='$username' AND password='$password'");
		
		$horizon = mysqli_num_rows($login);
		
		if ($horizon == 1)
		{
			$_SESSION['username']=$username; //Intializing Session
			header("location: admin.php"); //Redirecting to Admin Page
		}
		
		else		
		{
			$query = mysqli_query($connection, "select * from user where username='$username' AND password='$password'" );
		
			$rows = mysqli_num_rows($query);
		
			if ($rows == 1)
					{
			$_SESSION['username']=$username; //Intializing Session
			header("location: index.php"); //Redirecting to Other Page
					}
				else
					{
			echo"<h2>Email or Password is invalid.</h2>";
					}
		}
	
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

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

.content
{
	text-align:center;
	font-family:GeosansLight;
	font-size:25px;
	color:#000;
	background-color:#fff;
	display:inline-block;
	margin-top:20px;
	padding-top:10px;
}

</style>


</head>
<body id="body">
<h1> Login Page </h1>
<div class="content">
<form class="form-signin" method="POST" action="login.php">
      <?php if(isset($fmsg))
	  		{ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
	  <?php } ?>
        <table width="424" border="0">
          <tr>
            <td width="145">Username</td>
            <td width="269"><span class="input-group">
              <input type="text" name="username" class="form-control" placeholder="Username" required />
            </span></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required /></td>
          </tr>
        </table>
        <button type="submit">Login</button>
      </form>

</div>
        <p><a href="register.php">Register</a></p>    

</body>