<?php
require_once "connection.php";
require_once "function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online shoping</title>
<link rel="stylesheet" href="style.css" type="text/css" >
</head>

<body>
<div id="wrapper">
	<div id="header">
	<?php
	include_once "header.php";
	?>

	</div>
	<div id="left">
	<?php
	include_once "manage_user_left.php";
	?>
	</div>
	<div id="right">
		
	</div>
	<div id="footer">
	<?php
	include_once "footer.php";
	?>
	</div>
</div>
</body>
</html>
