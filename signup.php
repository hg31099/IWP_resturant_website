<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

if(document.form1.login.value=="")
{
alert("Plese Enter Your Password");
document.form1.login.focus();
return false;
} 
if(document.form1.pass.value=="")
{
alert("Plese Enter Confirm Password");
document.form1.pass.focus();
return false;
}
if(document.form1.pass.value!=document.form1.login.value)
{
alert("Confirm Password does not matched");
document.form1.pass.focus();
return false;
}
if(document.form1.name.value=="")
{
alert("Plese Enter Your Name");
document.form1.name.focus();
return false;
}

if(document.form1.email.value=="")
{
alert("Plese Enter your Email Address");
document.form1.email.focus();
return false;
}

return true;
}
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="8.jpg">
<h1 align="center">Register here</h1>
<center><br><br><br><h2>
<div class="floating-box">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >
<label for="uname">Name</label>
<input type="text" id="name" name="name" required><br><br>
<label for="uname">Email id</label>
<input type="text" id="email" name="email" required><br><br>
<label for=""pwd">Password</label>
<input type="password" id="login" name="login" required><br><br>
<label for=""pwd"> Confirm   </label>
<input type="password" id="pass" name="pass" required><br><br>
<input type="submit" name="submit" value="Signup">
</form></h2>
</div>
</center>
</body>
</html>