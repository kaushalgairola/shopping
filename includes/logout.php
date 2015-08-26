<!--***************************register page**********-->
<script>
  function copy()
  {
  	var a=(document.getElementById('add1').value);
	document.getElementById('add2').value=a;
	//alert(a);
  }
</script>
<div style="width: 100%; height: 600px; background-color:#F7F7F7;">
<div style="width: 100%; height:30px; background-color:#E9E9E9;">
<span><h2 align="center" style="color:#0099FF; font-family:Arial, Helvetica, sans-serif;">welcome to new users</h2></span>
</div>
<div style="width:700px; height: 570px; margin-left:150px; margin-right:100px; background-color:#F1F1F1; margin-top:0px;">
<form name="form2" action="process.php" method="post" enctype="multipart/form-data" style="color:#33CCFF;">
<table align="center" style="margin-top:0px;">
		
<table align="center" style="margin-top:20px;">
<tr>
<td>First name :</td>
<td><input type="text" name="first" value="" /></td>
</tr>
<tr>
<td>Last name :</td>
<td><input type="text" name="last" value="" /></td>
</tr>
<tr>
<td>email id :</td>
<td><input type="text" name="email" value="" /></td>
</tr>

<tr>
<td>password :</td>
<td><input type="password" name="pass" value="" /></td>
</tr>
<tr>
<td>confirm password :</td>
<td><input type="text" name="last" value="" /></td>
</tr>

<tr>
<td>Corresponding address :</td>
<td><textarea id="add1" value=""></textarea></td>
</tr>
<tr>
<td colspan="2"><input type="checkbox" name="chk" id="cpy" onClick="copy();"><strong>click Checkbox if both addresses are same</strong><br><br></td>
</tr>
<tr>
<td>Permanent address :</td>
<td><textarea id="add2" value=""></textarea></td>
</tr>

<tr><td colspan="2"><br></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="register" value="Sign up" /></td>
</tr>

</table>
</tr>
</table>
</form>
</div>
</div>
