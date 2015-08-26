<?php
if(@$_GET['page']!='')
{
$page = $_GET['page'];
switch($page)
{
case "$page":
include_once $page.".php";
break;
default :
echo "page not found";
}
}
if(@$_GET['msg']=="0")
{
include_once "listcat.php";
}

if(@$_GET['pagee']=="managecat")
{
	include_once "listcat.php";
}
if(@$_GET['pagee']=="manageuser")
{
	include_once "listuser.php";
}

if(@$_GET['pagee']=="managepro")
{
	include_once "listsubcat.php";
}
if(@$_GET['pagee']=="manageorder")
{
	include_once "listorder.php";
}

?>
