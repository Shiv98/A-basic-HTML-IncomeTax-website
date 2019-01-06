<?php
$UserName=$_POST['uname'];
$Password=$_POST['upass'];
$SQuestion=$_POST['sques'];
?>
<html>
	 <head>
	 <script>
	
	 </script>
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet" type="text/css" href="div.css">
	<link rel="stylesheet" type="text/css" href="textbox.css">
		
	<style>
	body{overflow:hidden;}
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
		<form name =frm action=UpdatePassword.php Method=POST>
		<table cellspacing=4 >
			<tr><th colspan=2>Reset Password</tr>
			<tr><td>User Name<td><input type=text name=uname id=uname value="<?php echo $UserName;?>"></tr>
			<tr><td>Security Question<td><input type=text name=sques id=sques PLACEHOLDER="Favourite Book"></tr>
			<tr><td>New Password<td><input type=password name=upass id=upass></tr>
			<tr><td><input type=button value="Back to login" onclick=window.open("incomelogin.php","_self")><td><input type=button value=Reset onclick=frm.submit()></tr>
			
			<tr><td>
			<td>	
<?php
include "mysqlconnect.php";
$q="SELECT * FROM loginformdb WHERE Username='".$UserName."' AND security_question='".$SQuestion."'";
$re=mysqli_query($lnk,$q);
$data=mysqli_fetch_array($re,MYSQLI_NUM);


if($UserName!=null && $SQuestion!=null){
if($data==null)echo "Security answers didnt match";
else{
if($Password!=null){
$query2="Update loginformdb SET Password='".$Password."' WHERE Username='".$UserName."' AND security_question='".$SQuestion."'";
mysqli_query($lnk,$query2);
echo "Password reset  sucessfully";
}
else echo "Enter your Password";
}}
?><td>
</tr>
	
		</table>
		</form>
		</form>
		</div>
	</body>
</html>

