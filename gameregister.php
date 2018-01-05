<?php require('connect.php'); ?>

<?php
    if (isset($_POST['gname'])){
        $gname = $_POST['gname'];
        $price = $_POST['price'];
        $developer = $_POST['developer'];
        $date = $_POST['date'];
        $description = $_POST['description'];
		$genre = $_POST['genre'];
		$image = $_POST['image'];
		$download = $_POST['download'];
        $query = "INSERT INTO game (gname, price, developer, description, release_date, genre, image, download) VALUES ('$gname', '$price', '$developer', '$description', '$date', '$genre', '$image', '$download')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Game Registered Successfully.";
        }else{
            $fmsg ="Game Registration Failed";
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.content
{
	text-align:center;
	font-family:GeosansLight;
	font-size:18px;
	color:#000;
	background-color:#fff;
	display:inline-block;
}

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

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Game</title>

</head>
<body id="body">
<p> Game Registration Page </p>

<div class="content">
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
  <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<form id="form1" name="form1" method="post" action="">

  <table width="880" height="338" border="0">
    <tr>
      <td width="165">Game Name:</td>
      <td width="705"><label for="gname"></label>
      <input type="text" name="gname" id="gname" size="50"/></td>
    </tr>
    <tr>
      <td>Price (RM):</td>
      <td><label for="price"></label>
      <input type="text" name="price" id="price" size="50" /></td>
    </tr>
    <tr>
      <td>Developer:</td>
      <td><label for="developer"></label>
      <input type="text" name="developer" id="developer" size="50"/></td>
    </tr>
    <tr>
      <td height="118">Description:</td>
      <td><label for="description"></label>
      <textarea name="description" id="description" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Release Date:</td>
      <td><input type="date" name="date" id="date"></td>
    </tr>
    <tr>
      <td>Genre:</td>
      <td><input type="text" name="genre" id="genre" size="50"/></td>
    </tr>
    <tr>
      <td>Image Link:</td>
      <td><input type="text" name="image" id="image" size="50"/></td>
    </tr>
    <tr>
      <td>Download Link:</td>
      <td><input type="text" name="download" id="download" size="50"/></td>
    </tr>
  </table>
  <input type="submit" name="submit" id="submit" value="Submit" />
</form>


  </div>
  <p><a href="admin.php"> Back to Admin Page </a></p>
</body>