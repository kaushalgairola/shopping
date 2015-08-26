<?php
if(@$_GET['msg']=='already')
{
echo '<script>alert("logout first");</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta>
<title>Your Store</title>
<base>
<link href="images/cart.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/carousel.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.jcarousel.min.js"></script>
</head>
<body>
<div id="container">
<div id="header">
    <?php include_once "/includes/header.php";?>
</div>
<div id="menu">
  <?php include_once "/includes/topnav.php"; ?>
</div>

 
<div id="content">
	<?php include_once "/includes/register.php";?>
</div>
<div id="footer">
  <?php include_once "/includes/footer.php";?> 
</div>

</div>
</body></html>