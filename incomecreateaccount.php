<?php
$Nam=$_POST['uname'];
$Fathername=$_POST['fname'];
$Address=$_POST['add'];
$Gender=$_POST['gen'];
$DOB=$_POST['dob'];
$Blood=$_POST['bg'];
$Mobile=$_POST['mob'];
$Email=$_POST['email'];
$Qual=$_POST['qua'];
$Income=$_POST['inc'];
$UserName=$_POST['cuname'];
$Password=$_POST['cupass'];
$SQuestion=$_POST['sques'];
?>
<html>
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	<link rel="stylesheet" type="text/css" href="textbox.css">
	<style>
	div{
border-style:none;
width:100%;
height:100%;
overflow:hidden;
background-color:Lightsalmon;
padding-bottom:30px;
padding-top:1px;
}
	table{
	width:40%;
	height:90%;
	font-size:25px;
	background-color:white;
	//border-bottom:5px solid grey;
	text-align:left;
	padding:10px;
	color:grey;
	border-radius:5px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	th{
	color:white;
	background-color:salmon;
	text-align:center;
	border-radius:1px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	</style>
	<body>
		<div align=center>
		<form name =frm method=POST action=incomecreateaccount.php>
		<table>
			<tr><th colspan=2>Create account</tr>
			<TR><TD>Name:
            <TD><INPUT type= "text" NAME="uname" ID="uname"><BR></TR>
            <TR><TD>Father's Name:
            <TD><INPUT type= "text" NAME="fname" ID="fname"><BR></TR>
            <TR><TD>Address:
            <TD><INPUT type= "text" NAME="add" ID="add"><BR></TR>
            <TR><TD>Gender: 
            <TD><INPUT type="radio" NAME="gen" value="male">Male
            <INPUT type="radio" NAME="gen" value="female">Female<BR></TR>
            <TR><TD>Date of Birth: 
            <TD><INPUT type="date" NAME="dob"><BR></TR>
            <TR><TD>Blood Group:
            <TD><SELECT NAME="bg">
                <OPTION value="A+">A+</OPTION>
                <OPTION value="A-">A-</OPTION>
                <OPTION value="B+">B+</OPTION>
                <OPTION value="B-">B-</OPTION>
                <OPTION value="AB+">AB+</OPTION>
                <OPTION value="AB-">AB-</OPTION>
                <OPTION value="O+">O+</OPTION>
                <OPTION value="O-">O-</OPTION>
            </Select></TR>
            <BR>
            <TR><TD>Mobile number:
            <TD><INPUT type= "text" NAME="mob" ID="mob"><BR></TR>
            <TR><TD>Email ID:
            <TD><INPUT type= "text" NAME="email" ID="email"><BR></TR>
            <TR><TD>Qualification:
            <TD><INPUT type= "text" NAME="qua" ID="qua"><BR></TR>
            <BR></TR>
            <TR><TD>Income:
            <TD><SELECT NAME="inc">
                <OPTION value="2,50,000 and below">2,50,000 and below</OPTION>
                <OPTION value="2,50,000 to 5,00,000">2,50,000 to 5,00,000</OPTION>
                <OPTION value="5,00,000 to 10,00,000">5,00,000 to 10,00,000 </OPTION>
                <OPTION value="10,00,000 and above">10,00,000 and above</OPTION>
            </Select></TR>
			<tr><td>User Name<td><input type=text name=cuname id=cuname value="<?php echo $UserName;?>"></tr>
			<tr><td>Password<td><input type=password name=cupass id=cupass></tr>
			<tr><td>Security Question<td><input type=text name=sques id=sques PLACEHOLDER="Favourite Book"></tr>
			<tr><td><td><input type=submit value=Create></tr>
			<tr><td><td>
			<?php
include "mysqlconnect.php";
include "CheckAccount.php";
if($UserName!=null && $Password==null && $data==null)echo "Enter your Password";
if($UserName==null && $Password!=null)echo "Enter your User Name";
if($UserName!=null){
	if($data!=null)
	echo "User Name already taken.<br>Try Again";
	else if($data==null && $Password!=null){
	$q="INSERT INTO loginformdb VALUES('".$Nam."','".$Fathername."','".$Address."','".$Gender."','".$DOB."','".$Blood."','".$Mobile."','".$Email."','".$Qual."','".$Income."','".$UserName."','".$Password."','".$SQuestion."')";
	mysqli_query($lnk,$q);
	echo "Your User Name is:";
	echo $UserName;
	echo "<br><a href=incomelogin.php>GO TO LOGIN PAGE</a>";
	}

}else if($Password==null)echo "Enter the fields";

?>
			</tr>
		</table>
		</form>
		</div>
	</body>
</html>

