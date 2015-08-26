<?php
if(@$_GET['msg']=='already')
{
echo '<script>alert("logout first");</script>';
}
?>
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
<?php 
if(@$_GET['msg']=='reg')
{
?>
<div class="notice" style="height:30px; width: 980px; background-color:#F0F0F0; margin-bottom:10px; border-radius: 0px 7px 7px 7px;">
<div style="color:#009966; margin-top:10px;" align="center">you have successfully registered</div>
</div>
<?php } ?>
<?php 
if(@$_GET['msg']=='login')
{
?>
<div class="notice" style="height:30px; width: 980px; background-color:#F3F3F3; margin-bottom:10px; border-radius: 0px 7px 7px 7px;">
<div style="color:#009966; margin-top:10px;" align="center">you have successfully login</div>
</div>
<?php } ?>

<?php 
if(@$_GET['msg']=='logout')
{
?>
<div class="notice" style="height:30px; width: 980px; background-color:#F3F3F3; margin-bottom:10px; border-radius: 0px 7px 7px 7px;">
<div style="color:#009966; margin-top:10px;" align="center">you have successfully logout</div>
</div>
<?php } ?>

<?php 
if(@$_GET['msg']=='done')
{
?>
<div class="notice" style="height:30px; width: 980px; background-color:#F0F0F0; margin-bottom:10px; border-radius: 0px 7px 7px 7px;">
<div style="color:#009966; margin-top:10px;" align="center">Your order has been successfully booked. You may check your mail now.</div>
</div>
<?php 
session_destroy();
session_unset();
}
?>


	<?php include_once "/includes/featured.php";?>
</div>
<div id="footer">
  <?php include_once "/includes/footer.php";?> 
</div>

</div>
</body></html>