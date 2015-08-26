
<!--********************login process***************-->

<?php
include_once "/includes/function.php";
include_once "/includes/connection.php";
include_once "/includes/functions.php";
if(isset($_POST['login']))
{
$email = $_POST['email'];
$pass = $_POST['pass'];
if(!empty($email))
{
	if(!empty($pass))
	{
		$sql = "select *from user";
			$res = mysql_query($sql);
			while($row = mysql_fetch_array($res))
			{
				if($row['email']==$email && $row['pass']==$pass)
				{
				session_start();
				//$_SESSION['log']='true';
				$_SESSION['userid'] = $row['email'];
				$_SESSION['username'] = $row['user'];
				$ct = count($_SESSION['cart']);
				if($ct<1)
				Redirect("index.php?msg=login");
				else
				Redirect("payment.php?msg=chkout");
				}
				else{
					Redirect("login.php?msg=4");
				}
			}
	}
	else
	{
		Redirect("login.php?msg=2");	
	}
}
else
{
	Redirect("login.php?msg=1");
}
}
?>

<!--********************logout process***************-->

<?php
if(@$_GET['msg']=='logout')
{
//session_start();
session_destroy();
session_unset();
Redirect("index.php?msg=logout");
}
?>

<!--********************register process***************-->

<?php
if(isset($_POST['register']))
{
	$first = $_POST['first'];
	$last = $_POST['last'];
	$name = $first." ".$last;
	//echo $name;
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	$dob = $_POST['D_O_B'];
	$gender = $_POST['sex'];
	$sql = "select email from user where email='".$email."'";
	$res = mysql_query($sql);
	$row = mysql_num_rows($res);
	if($row > 0)
		{
			
			Redirect("register.php?msg=no");
		}
	else	
		{
			$dql = "insert into user set user='".$name."', pass='".$pass."', email='".$email."', mno='".$mno."', address='".$add1."'";
			$res = mysql_query($dql);
			if($res)
			{
			
			$_SESSION['userid'] = $email;
			$_SESSION['username'] = $first;
			$ct = count($_SESSION['cart']);
				if($ct<1)
				Redirect("index.php?msg=register");
				else
				Redirect("payment.php?msg=chkout");
			}
		}
	
}
?>

<?php
if(@$_GET['msg']=='chklog')
{
	 
	if(@$_SESSION['userid']=="")
	{
		Redirect("login.php");
	}
	else
	{
		Redirect("index.php?msg=already");
	}
}

if(@$_GET['msg']=='chkreg')
{
	 
	if(@$_SESSION['userid']=="")
	{
		Redirect("register.php");
	}
	else
	{
		Redirect("index.php?msg=already");
	}
}


?>


<?php
if(@$_GET['msg']=='confirm')
{
	
	$user = $_SESSION['userid'];
	$sql = "select *from user where email='".$user."'";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	$customer_id = $row['id'];
	$name = $row['user'];
	$address = $row['address'];
	$items = count($_SESSION['cart']);
	$total = get_order_total();
	$payment = "cash on delivery";
	$date = date('Y-m-d');
	$sqlorder = "insert into orders set item='".$items."', totalamt='".$total."', date='".$date."', payment='".$payment."', userid='".$customer_id."'";
	$resod = mysql_query($sqlorder);
	if($resod)
	{
	$sqlmail = "select *from orders where userid='".$customer_id."'";
	$resmail = mysql_query($sqlmail);
	$rowmail = mysql_fetch_array($resmail);
	$to = $user;
	$to.= "anshul.mishra@dcsiso.com"; 
	$subject = "shopping detail from onlineshopping"; 
	$msg = "dear ".$name."<br>";
	$msg.= "your order has been booked"."<br>";
	$msg.= "you have been bought ".$items." items whose total amount is";
	$msg.= $total."<br><br>";
	$msg.= "delivery will be within 3 to 4 days"."<br>";
	$msg.= "Thank you for online shopping.";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//echo $msg;
	//$mail = mail($to,$subject,$msg,$headers);						
	//if($mail)
	Redirect("index.php?msg=done");
	}
}
?>

