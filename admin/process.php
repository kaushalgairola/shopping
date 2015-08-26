<?php //session_start();
require_once "connection.php";
require_once "function.php"; 
require_once "session_config.php"; 

//*************login**************************
if(isset($_POST['login']))
{

$user = $_POST['user'];
$pass = $_POST['pass'];
	if(!empty($user))
	{
		if(!empty($pass))
		{
			$sql = "select *from users";
			$res = mysql_query($sql);
			while($row = mysql_fetch_array($res))
			{
				if($row['username']==$user && $row['pass']==$pass)
				{
				session_start();
				$_SESSION['log']='true';
				$_SESSION['user'] = $user;
				Redirect("home.php?msg=0");
				}
			}	
			Redirect("index.php?msg=3");
		}
		else
		{
		Redirect("index.php?msg=2");
		}

	}
	else
	{
	Redirect("index.php?msg=1");
	}
}

//************************logout***************
if(@$_GET['lg']=='yes')
{
	session_start();
	session_destroy(); //destroys the current session
	session_unset();
	Redirect("index.php?msg=logout");
}
//********************** edit user*************
if(isset($_GET['edituser']))
{
	$id = $_GET['id'];
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	$sql = "update users set username='".$user."',pass='".$pass."' where id=".$id."";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listuser");
	}
	else
	{
		Redirect("edituser.php?msg=fail");
	}
}

//*************edit category************
if(isset($_GET['editcat']))
{
	$id = $_GET['id'];
	$catname = $_GET['catname'];
	$des = $_GET['description'];
	$sql = "update category set categoryname='".$catname."',description='".$des."' where id=".$id."";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listcat");
	}
}

//********************edit subcategory**************
if(isset($_GET['editsubcat']))
{
	$id = $_GET['id'];
	$subcatname = $_GET['subcatname'];
	$description = $_GET['description'];
	$sql = "update subcat set subcatname='".$subcatname."',description='".$description."' where id=".$id."";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listsubcat");
	}
	
}

//************************edit product****************
if(isset($_GET['editproduct']))
{
	$id = $_GET['id'];
	$pro = $_GET['productname'];
	$description = $_GET['description'];
	$price = $_GET['price'];
	$sql = "update product set productname='".$pro."',description='".$description."',price='".$price."' where id=".$id."";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listproduct");
	}
}

//************************remove category**********************
if(@$_GET['page']=="removecat")
{
	$id = $_GET['id'];
	$sql = "delete from category where id=".$id." ";
	$res = mysql_query($sql);
	if($res)
	{	$sqlmin = "delete from subcat where pid='".$id."'";
		$resmin = mysql_query($sqlmin);
		$sqlm = "delete from product where ppid='".$id."'";
		$resm = mysql_query($sqlmm);
		Redirect("home.php?page=listcat");
	}
	else
	{
		Redirect("home.php?page=listcat");
	}

}

//************************remove user**********************
if(@$_GET['page']=="removeuser")
{
	$id = $_GET['id'];
	$sql = "delete from users where id=".$id." ";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listuser");
	}

}

//************************remove subcategory**********************
if(@$_GET['page']=="removesubcat")
{
	$id = $_GET['id'];
	$sql = "delete from subcat where id=".$id." ";
	$res = mysql_query($sql);
	if($res)
	{
		$sqlmin = "delete from product where pid='".$id."'";
		$resmin = mysql_query($sqlmin);
		Redirect("home.php?page=listsubcat");
	}

}

//* *******************remove product********************
if(@$_GET['page']=="removeproduct")
{
	$id = $_GET['id'];
	$sql = "delete from product where id=".$id." ";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listproduct");
	}

}

//***********************add category***************
if(isset($_GET['addcat']))
{
	$catname = $_GET['catname'];
	$des = $_GET['description'];
	$sqlchk = "select categoryname from category where categoryname='".$catname."'";
	if(!mysql_fetch_array(mysql_query($sqlchk)))
	{
	$sql = "insert into category set categoryname='".$catname."',description='".$des."'";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listcat");
	}
	}
	else
	{
		Redirect("home.php?page=listcat&msg=n");
	}
}
//*********************add user*******************
if(isset($_GET['adduser']))
{
	$username = $_GET['user'];
	//echo $catname;
	$pass = $_GET['pass'];
	$sqlchk = "select *from users where username='".$username."' and pass='".$pass."'";
	if(!mysql_fetch_array(mysql_query($sqlchk)))
	{
	$sql = "insert into users set username='".$username."',pass='".$pass."'";
	$res = mysql_query($sql);
	if($res)
	{
	Redirect("home.php?page=listuser");

	}
	}
	else
	{
		Redirect("home.php?page=listuser&msg=n");
	}

}

//********************ADD subcategory**************
if(isset($_GET['addsubcat']))
{
$subcatname = $_GET['subcatname'];
$description = $_GET['description'];
$pid = $_GET['selcat'];
$sql = "insert into subcat set subcatname='".$subcatname."',description='".$description."',pid=".$pid."";
$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?page=listsubcat");
	}
}

//**********************add product****************
if(isset($_POST['addproduct']))
{
$productname = $_POST['productname'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
//$imagename = $_POST['pic'];
$pid = $_POST['selsubcat'];
$sqlpid = "select pid from subcat where id=".$pid."";
$resid = mysql_query($sqlpid);
$rowsql = mysql_fetch_array($resid);
$ppid = $rowsql['pid'];
if($_FILES['pic']!='')
{
	$imagename = $_FILES['pic']['name'];
	$source = $_FILES['pic']['tmp_name'];
	$destination = "../images/".$imagename;
	move_uploaded_file($source, $destination);
}
$sql = "insert into product set productname='".$productname."', pid=".$pid.", ppid=".$ppid.", imagename='".$imagename."', price='".$price."', description='".$description."', quantity='".$quantity."'";
$res = mysql_query($sql);
//echo $sql;
	if($res)
	{
		Redirect("home.php?page=listproduct");
	}
}


//* *******************remove order********************
if(@$_GET['msg']=="removeorder")
{
	$id = $_GET['id'];
	$sql = "delete from orders where orderid=".$id." ";
	$res = mysql_query($sql);
	if($res)
	{
		Redirect("home.php?pagee=manageorder");
	}

}




?>