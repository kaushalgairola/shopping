<?php
include_once "includes/function.php";
session_start();
$ct = count($_SESSION['cart']);
$userset = $_SESSION['userid'];
//if($_SESSION['userid']=="")
//{
//Redirect("login.php");
//}
if($ct>0 && $userset!='')
{
	Redirect("payment.php?msg=chkout");
}
else if($ct>0 && $userid=='')
{
	Redirect("payment.php?msg=notset");
}
else
Redirect("payment.php?msg=not");
?>