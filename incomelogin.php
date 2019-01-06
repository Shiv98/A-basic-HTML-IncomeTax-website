<?php
session_start();
$UserName=$_POST['uname'];
$Password=$_POST['upass'];
?>
<html>
	 <head>
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet" type="text/css" href="div.css">
	<link rel="stylesheet" type="text/css" href="textbox.css">
		
	<style>
	table{
	width:700px;
	height:80%;
	font-size:30px;
	background-color:white;
	//border-bottom:5px solid grey;
	text-align:center;
	padding:2px;
	color:grey;
	border-radius:5px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	th{
	color:white;
	background-color:salmon;
	text-align:center;
	border-radius:5px;
	}
	</style>
	</head>
	<body>
		<div id=login align=center>
		<form name =frm action=incomelogin.php Method=POST>
		<table cellspacing=4>
			<tr><th colspan=2>Login Account</tr>
			<tr><td>User Name<td><input type=text name=uname id=uname value="<?php echo $UserName;?>"></tr>
			<tr><td>Password<td><input type=password name=upass id=upass></tr>
			<tr><td><input type=button value="Create New Account " onclick=window.open("incomecreateaccount.php","_self")><td><input type=button value=Login onclick=frm.submit()><td></tr>
			<tr><td>
			<td>	
<?php
include "mysqlconnect.php";
include "CheckAccount.php";
if($UserName!=null){
if($data==null)echo "User doesn't exists!!";
else{
if($Password!=null){

if($data[11]==$Password)
	{
	$_SESSION['uname']=$UserName;
	echo "Logged in as".$_SESSION['uname']."successfully";
	header("Location:index.php");
	}
else echo "Try Again";
}
else echo "Enter your Password";
}}
?><td>
</tr>
     <tr><td colspan=2><a href=UpdatePassword.php>ForgotPassword</a></tr>
		</table>
		</form>
		</form>
		</div>
	</body>
</html>

