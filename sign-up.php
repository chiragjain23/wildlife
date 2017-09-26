<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SIGN UP</title>
<link rel="stylesheet" href="sign-up.css" type="text/css" />
<script type="text/javascript">
function call()
{
var a=document.getElementById("fname").value;
var b=document.getElementById("lname").value;
var k=document.getElementById("birthdate").value;
//var d=document.getElementById("day").value;
//var e=document.getElementById("year").value;
var f=document.getElementById("address").value;
var g=document.getElementById("emailid").value;
var h=document.getElementById("Password").value;
var j=document.getElementById("CPassword").value;
var index1=g.indexOf("@");
var index2=g.lastIndexOf(".");
for(var i=0;i<document.sign.Radio1.length;i++)
	{
		if(document.sign.Radio1[i].checked)
			{
				var c=document.sign.Radio1[i].value;
			}
	}
if(a==""||a=="First" || b=="" ||b=="Last"||c==""|| f=="" ||g=="" || h=="" || j=="" || k=="")
	{
		alert("Fields cannot be left blank.");
	}
else { if(Number(d)<1 || Number(d)>31) { alert("Please enter a valid day"); }
else { if(index1==-1 || index2==-1) { alert("Please fill your email-id properly"); }
else { if(h!=j) {alert("Passwords do not match"); }
else { return true; }}}}

}
</script>
</head>

<body>
<div id="sign-up">
</div>
</body>
</html>
