<?php include_once "/includes/connection.php"; ?>
<?php include_once "/includes/functions.php"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Your Store</title>
<base href="" />
<meta name="description" content="My Store" />
<link href="images/cart.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/stylesheett.css" />
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
<div id="container" class="clear">
<div id="header" class="clear">
    <?php include_once "/includes/header.php";?>
</div>
<div id="menu" class="clear">
  <?php include_once "/includes/topnav.php"; ?>
</div>
<div id="content_wrapper" class="">
<div id="column-left" class="clear">
	<?php include_once "/includes/left_boxx.php";?>
</div>
<div id="column-right" class="clear">
	<?php include_once "/includes/right_boxx.php"; ?>
</div>
</div>
<div class="clear"></div>
<div id="footer" class="clear">
  <?php include_once "/includes/footer.php"; ?>
  
</div>

</div>
</body>
</html>