<?php
require_once "connection.php";
require_once "function.php";
?>
<div id="topnav">
<h1 style="color:#38B0E3; font:Georgia, 'Times New Roman', Times, serif; padding-top:20px; " align="center">ADMIN SECTION</h1>
		<div style="width: auto; height: 20px; float: right;" class="clear">
		<div style="width: 150px; float: left">welcome&nbsp;&nbsp;<?php echo $_SESSION['user'];?></div>
		<a href="process.php?lg=yes">logout&nbsp;&nbsp;&nbsp;</a>
		</div>
		<div id="menu_tab" align="center">                               
                <ul class="menu">                         
                     <li><a href="home.php?msg=0" class="nav_home"> HOME </a></li>
                     <li><a href="home.php?pagee=managecat" class="nav_about">MANAGE CATEGORY</a></li>
                     <li><a href="home.php?pagee=manageuser" class="nav_help">MANAGE ADMINUSER</a></li>
                     <li><a href="home.php?pagee=managepro" class="nav_help">MANAGE PRODUCT</a></li>
					 <li><a href="home.php?pagee=manageorder" class="nav_help">MANAGE ORDERS</a></li>
              
                </ul>
        </div>
</div>		