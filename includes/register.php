<!--***************************register page**********-->
<script>

//*******************email validation***************
 function isValidEmailId(elm)
   {
	 var string = document.ff.email.value;
		if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
		{
			return true;
		}
		else
		{
			alert("Email address is not valid ! ");
			document.ff.email.focus();
			document.ff.email.select();
			return false;
		}
   }
   
//***********address copy to another add field

  function copy()
  {
  	var a=document.ff.add1.value;
	document.ff.add2.value=a;
	//alert(a);
  }
  function validate()
  {
  	if(document.ff.first.value=="")
	{
		alert("Please Enter Your First Name");
		document.ff.first.focus();
		return false;
		
	}
	if(document.ff.last.value=="")
	{
		alert("Please Enter Your Last Name");
		document.ff.last.focus();
		return false;
		
	}
	if(document.ff.email.value=="")
	{
		alert("Please Enter Your Email id ");
		document.ff.email.focus();
		return false;
		
	}
	if(document.ff.pass.value=="")
	{
		alert("Please Enter password");
		document.ff.pass.focus();
		return false;
		
	}	
	if(document.ff.rpass.value=="")
	{
		alert("Please fill re-password field");
		document.ff.rpass.focus();
		return false;
		
	}
	
	if(document.ff.mno.value=="")
	{
		alert("Enter mobile number field");
		document.ff.mno.focus();
		return false;
		
	}
	
	var numericExpression = /^[0-9]+$/;
  if(!document.ff.mno.value.match(numericExpression))
	 {
	 alert('Enter only numerics');
	 document.ff.mno.focus();
	 return false;
	 }
	if(document.ff.add1.value=="")
	{
		alert("Enter address field");
		document.ff.add1.focus();
		return false;
		
	}
	if(document.ff.add2.value=="")
	{
		alert("Enter address field");
		document.ff.add2.focus();
		return false;
		
	}
	 if(document.ff.D_O_B.value=="")
	{
		alert("Enter date of birth field");
		document.ff.D_O_B.focus();
		return false;
		
	}
	var str = document.ff.pass.value;
	var count = str.length;
	if(count<8)
	{
		
		alert("password should be 8 character");
		document.ff.pass.focus();
		return false;
	}
	var str = document.ff.rpass.value;
	var count = str.length;
	if(count<8)
	{
		
		alert("password should be 8 character");
		document.ff.rpass.focus();
		return false;
	}
	var str = document.ff.mno.value;
	var count = str.length;
	if(count<10 || count>10)
	{
		
		alert("Mobile number should be 10 character");
		document.ff.mno.focus();
		return false;
	}
	var pass = document.ff.pass.value;
	var rpass = document.ff.rpass.value;
	if(pass!=rpass)
	{
		alert("password does not matched ! try again");
		document.ff.rpass.focus();
		return false;
	}
	
	
	var dobExpression = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/;
		
		if(!document.ff.D_O_B.value.match(dobExpression))
	 		{
	 		alert('Please Enter your date of birth in this format dd/mm/yy');
	 		document.ff.D_O_B.focus();
	 		return false;
	 		}
			
			if(!isValidEmailId("email"))
			{
			return false;
			}
	
 }
 
</script>
<div style="width: 100%; height: 600px; background-color:#F7F7F7;">
<div style="width: 100%; height:30px; background-color:#E9E9E9;">
<span><h2 align="center" style="color:#0099FF; font-family:Arial, Helvetica, sans-serif;">welcome to new users</h2></span>
</div>
<div style="width:700px; height: 570px; margin-left:150px; margin-right:100px; background-color:#F1F1F1; margin-top:0px;">
<form name="ff" action="process.php" method="post" enctype="multipart/form-data" style="color: #33CCFF;"  onsubmit="return validate();">
<table align="center" style="margin-top:0px;">
		
<table align="center" style="margin-top:20px;">
<tr>
<td>First name :</td>
<td><input type="text" name="first" value="" placeholder="First name" /></td>
</tr>
<tr>
<td>Last name :</td>
<td><input type="text" name="last" placeholder="Last name" /></td>
</tr>
<tr>
<td>email id :</td>
<td><input type="text" name="email" placeholder="Email id" /></td>
</tr>

<tr>
<td>password :</td>
<td><input type="password" name="pass" placeholder="password" maxlength="20" /></td>
</tr>
<tr>
<td>confirm password :</td>
<td><input type="password" name="rpass" placeholder="re-type password" maxlength="20" /></td>
</tr>

<tr>
<td>Mobile number :</td>
<td><input type="text" name="mno" placeholder="number" /></td>
</tr>

<tr>
<td>Corresponding address :</td>
<td><textarea name="add1" placeholder="address"></textarea></td>
</tr>
<tr>
<td colspan="2"><input type="checkbox" name="chk" id="cpy" onClick="copy();"><strong>click Checkbox if both addresses are same</strong><br><br></td>
</tr>
<tr>
<td>Permanent address :</td>
<td><textarea name="add2" placeholder="address"></textarea></td>
</tr>
<tr>
		<td>Date Of Birth<sup style="color:#FF0000;"></sup></td>:
		<td><input type="text" name="D_O_B"  size="50" placeholder="DD/MM/YY" /></td>
	</tr>
<tr><td><br /></td></td>
<tr>
		<td>Gender</td> :
		<td>
		<input type="radio" name="sex" value="Male" checked="checked" />Male
		<input type="radio" name="sex" value="Female" />Female
		</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="register" value="Sign up" /></td>
</tr>
<tr><td><br /></td></tr>
</table>
</tr>
</table>
</form>
</div>
</div>
