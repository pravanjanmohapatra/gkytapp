<?php
if(isset($_POST['login']))
	{
$u_phone='9938327367';
$destUrl = "http://103.247.98.91/API/SendMsg.aspx?uname=20120003&pass=123456&send=CLKBZR&";
$codeString = rand(100000,999999);
$message = "Your mmobile verification code to activate your ClickBazar Account is:".$codeString;



$destUrl .= "&dest=".$u_phone."&msg=".$message;

$messageStatus = file_get_contents($destUrl);

header("location: test.php?fl=1");	   
}
?>
<form name="" method="post" action="" enctype="multipart/form-data" >
<table >
<tr>
<td>
<input type="submit" name="login" value="Submit"   />
</td>
</tr>
</table>
</form>