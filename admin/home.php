<?php
require_once "session_config.php"; 
if(@$_GET['msg']=='n')
{
echo '<script>alert(" already exists")</script>';
}
?>

<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" href="style/layout.css" type="text/css" />
</head>
<body>
<div class="wrapper row1">
	<div id="header" class="clear">
	<?php include_once "header.php"; ?>
	
	</div>
</div>	
<!-- ####################################################################################################### -->
</div>
<div id="containt_wrapper">
	<div id="containt_area" class="clear">
	
			<div id="containt_left">
				<?php include_once "left.php";?>
			</div>			
			<div id="containt_right">
	
				<?php include_once "right.php"; ?>
			</div>
	</div>		
</div>
  <div id="copyright" class="clear">
    <?php include_once "footer.php"; ?>
  </div>



</body>
</html>
