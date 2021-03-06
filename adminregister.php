<?php require('connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Registration</title>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
 
<script type="text/javascript">
        $(document).ready(function() {
            $('#usernameLoading').hide();
            $('#username').keyup(function(){
              $('#usernameLoading').show();
              $.post("check.php", {
                username: $('#username').val()
              }, function(response){
                $('#usernameResult').fadeOut();
                setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 400);
              });
                return false;
            });
        });
 
        function finishAjax(id, response) {
          $('#usernameLoading').hide();
          $('#'+id).html(unescape(response));
          $('#'+id).fadeIn();
        } //finishAjax
</script>

<?php
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
 
        $query = "INSERT INTO `admin` (Aname, Pword, Email, Fname, Lname) VALUES ('$username', '$password', '$email', '$fname', '$lname')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Admin Added Successfully.";
        }else{
            $fmsg ="Failed to Register Admin";
        }
    }
?>

</head>
<body id="body">
<h1> Register Here </h1>
<div class="content">
      <form class="form-signin" method="POST">
       <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <table width="500" border="0">
          <tr>
            <td>Username:</td>
            <td><span class="input-group">
              <input type="text" name="username" class="form-control" placeholder="Username" required />
            </span></td>
          </tr>
          <tr>
            <td>First Name:</td>
            <td><input type="fname" name="fname" id="inputFname" class="form-control" placeholder="First Name" required /></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="lname" name="lname" id="inputLname" class="form-control" placeholder="Last Name" required /></td>
          </tr>
          <tr>
            <td>Email Address:</td>
            <td><input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required /></td>
          </tr>
        </table>
        <div class="input-group"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
</div>
        <p><a href="admin.php">Back to Admin Page</a></p>
</body>