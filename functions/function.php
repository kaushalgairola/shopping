<script type="text/javascript" async="" src="ga.js"></script><script language="javascript" type="text/javascript">
 

 function validate()
 {
  if(document.frmindex.username.value=="")
	{
		alert("Please Enter Your Full Name");
		document.frmindex.username.focus();
		return false;
		
	}
	
		var numericExpression = /^[0-9]+$/;
  if(document.frmindex.contact_number.value=="")
	{
		alert("Please Enter your Contact Number");
		document.frmindex.contact_number.focus();
		return false;
		
	}
  	 if(!document.frmindex.contact_number.value.match(numericExpression))
	 {
	 alert('Please Enter Numerics');
	 document.frmindex.contact_number.focus();
	 return false;
	 }
	 
  
  if(document.frmindex.email.value=="")
	{
		alert("Please Enter Email Address");
		document.frmindex.email.focus();
		return false;
		
	}
	
	

	if(!isValidEmailId("email"))
	{
		return false;
	}
	
	if(document.frmindex.sex.value=="")
	{
		alert("Please Select Your Gender");
		document.frmindex.location.focus();
		return false;
		
	}

	 
	 
	 if(document.frmindex.department.value=="")
	 {
		alert("Please Select a Department");
		return false;
	 }
	 
	 
  	
	 
	
 }
 

function validate1()
 {
  if(document.frmindex.Username.value=="")
	{
		alert("Please Enter Your Full Name");
		document.frmindex.Username.focus();
		return false;
		
	}
		
		var dobExpression = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/;
	if(document.frmindex.D_O_B.value=="")
	{
		alert("Please Enter your Date Of Birth");
		document.frmindex.D_O_B.focus();
		return false;
		
	}
	
	if(!document.frmindex.D_O_B.value.match(dobExpression))
	 {
	 alert('Please Enter your date of birth in this format dd/mm/yy');
	 document.frmindex.D_O_B.focus();
	 return false;
	 }
	
	
	
	if(document.frmindex.Father_Name.value=="")
	{
		alert("Please Enter Your Father Name");
		document.frmindex.Father_Name.focus();
		return false;
		
	}
	
	if(document.frmindex.Mother_Name.value=="")
	{
		alert("Please Enter Your Full Mother Name");
		document.frmindex.Mother_Name.focus();
		return false;
		
	}
	
	if(document.frmindex.Address.value=="")
	{
		alert("Please Enter Your Address");
		document.frmindex.Address.focus();
		return false;
		
	}
	
	if(document.frmindex.email.value=="")
	{
		alert("Please Enter Email Address");
		document.frmindex.email.focus();
		return false;
		
	}
	
	

	if(!isValidEmailId("email"))
	{
		return false;
	}
	
	
		var numericExpression = /^[0-9]+$/;
  if(document.frmindex.Contact.value=="")
	{
		alert("Please Enter your Contact Number");
		document.frmindex.Contact.focus();
		return false;
		
	}
  	 if(!document.frmindex.Contact.value.match(numericExpression))
	 {
	 alert('Please Enter Numerics');
	 document.frmindex.Contact.focus();
	 return false;
	 }
	 
	 
	  if(document.frmindex.Language.value=="")
	{
		alert("Please Select Your Language");
		document.frmindex.Language.focus();
		return false;
		
	}
	 
	 if(document.frmindex.sex.value=="")
	{
		alert("Please Select Your Gender");
		document.frmindex.sex.focus();
		return false;
		
	}
	
	if(document.frmindex.Nationality.value=="")
	{
		alert("Please Select Your Nationality");
		document.frmindex.Nationality.focus();
		return false;
		
	}
	
	
	if(document.frmindex.Course.value=="")
	{
		alert("Please Select Your Course");
		document.frmindex.Course.focus();
		return false;
		
	}

	 
	 if(document.frmindex.Qualification.value=="")
	 {
		alert("Please Select a Qualification");
		document.frmindex.Qualification.focus();
		return false;
	 }
	 
	 if(document.frmindex.Name_Of_Centre.value=="")
	 {
		alert("Please Fill your Centre Code");
		document.frmindex.Name_Of_Centre.focus();
		return false;
	 }
	 
	 if(document.frmindex.security_code.value=="")
	 {
		alert("Please enter the security code");
		return false;
	 }
  	
	 
	
 }
<!-- Form Validation Ends Here. -->

 

 
 <!-- Javascript Function Definitions -->
 function isValidEmailId(elm)
   {
	 var string = document.frmindex.email.value;
		if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
		{
			return true;
		}
		else
		{
			alert("Email address is not valid ! ");
			document.frmindex.email.focus();
			document.frmindex.email.select();
			return false;
		}
   }
   
 <!-- Javascript Function Definitions -->
</script>