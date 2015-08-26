<?php
require_once "connection.php";
require_once "function.php";
?>
<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" href="style/layout.css" type="text/css" />
</head>
<body>
<div class="wrapper row1">
	<div id="header" class="clear">
	<?php include_once "login.php"; ?>
	
	</div>
</div>	
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
		<?php //include_once "/includes/topnav.php"; ?>
       <div  class="clear"></div>
  </div>
</div>
<div id="containt_wrapper">
	<div id="containt_area" class="clear">
	
			<div id="containt_left">
				<?php //include_once "/includes/left.php";?>
			</div>			
			<div id="containt_right">
	
				<?php //include_once "/includes/right.php"; ?>
			</div>
	</div>		
</div>
  <div id="copyright" class="clear">
    <p class="fl_left">All Rights Reserved - <a href="index.php">www.onlineshopping.com</a></p>
    <p class="fl_right">Design & Developed By : <a href="http://www.onlineshopping.com/" title="">Ajay & Kaushal</a></p>
  </div>
</body>
</html>
