<?php require('connect.php')?>
<?php require('session.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<style>
#body 
{
	background:#3CF;
	background: linear-gradient(180deg, rgba(51,153,204,1), rgba(0,51,255,1), rgba(0,0,255,1)) ;
	background-repeat:no-repeat;
	background-attachment:fixed;
	text-align:center;

}

#content
{
	display: inline-block;
	color:#999;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	background:#FFF;
	width:75%;
	text-align:center;
	margin-top:10px;
}

#content2
{
	display: inline-block;
	color:#999;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	background:#FFF;
	width:75%;
	text-align:left;
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
}

#content img
{
	margin-top:10px;
	display:inline-block;
}
#content a
{
	float:left;
	text-decoration:none;
	color:#FFF;
	margin-top:15px;
	margin-left:10px;
	font-family:GeosansLight;
	font-size:30px;
	display:block;
}

#content p
{
	font-family:GeosansLight;
	font-size:20px;
	color:#000;
	float:left;
	display:block;
	margin-left:25px;
	width:100%;
}

#content2 p
{
	font-family:GeosansLight;
	font-size:20px;
	color:#000;
	float:left;
	display:block;
	margin-left:10px;
	width:100%;
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
<nav id="navcontainer" class="page-navigation">
	<ul id="navlist">
    	<li><a href="cart.php">CART</a></li>
        <li><a href="gamepage.php">GAMES</a></li>
        <li><a href="index.php">HOME</a></li>
        <li><a href="memberdetail.php"><?php echo $_SESSION['username'];?></a></li>
      <img id="navimg" src="funhalt logo.png" width="10%" />
	</ul>
</nav>
<div id="content">
<p> View Cart </p>
</div>
</body>
</html>