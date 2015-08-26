<?php
if(@$_GET['msg']=="0")
{ 
?>
<ul class="abc">

			<li class="abc"><a href="home.php?page=listcat">list category</a></li><br><br>
			<li><a href="home.php?page=listuser">list user</a></li><br><br>
			<li><a href="home.php?page=listsubcat">list subcategory</a></li><br><br>
			<li><a href="home.php?page=listproduct">list product</a></li><br><br>			
</ul>
<?php } ?>
<?php
if(@$_GET['pagee']!='')
{
$pagee = $_GET['pagee'];
switch($pagee)
{
case "$pagee":
include_once $pagee.".php";
break;
default :
echo "page not found";
}
}
if(@$_GET['page']=="listcat" || @$_GET['page']=="addcat"|| @$_GET['page']=="editcat" || @$_GET['page']=="removecat")
{
	include_once "managecat.php";
}
if(@$_GET['page']=="listuser" || @$_GET['page']=="adduser"|| @$_GET['page']=="edituser" || @$_GET['page']=="removeuser")
{
	include_once "manageuser.php";
}

if(@$_GET['page']=="listsubcat" || @$_GET['page']=="addsubcat" || @$_GET['page']=="editsubcat" || @$_GET['page']=="removesubcat")
{
	include_once "managesubcat.php";
}
if(@$_GET['page']=="listproduct" || @$_GET['page']=="editproduct" || @$_GET['page']=="removeproduct" || @$_GET['page']=="addproduct")
{
	include_once "managepro.php";
}
?>