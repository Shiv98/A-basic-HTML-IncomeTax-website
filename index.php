<?php session_start();?>
<html>
<head>
<link rel=stylesheet type="text/css" href=button.css >
<link rel=stylesheet type="text/css" href=body.css >
<script>
function contentChange(filename){
var xmlo=new XMLHttpRequest();
xmlo.open("GET",filename+"?_= "+new Date().getTime(),true);
xmlo.onreadystatechange=function(){
if(xmlo.readyState==4)document.getElementById("content").innerHTML=xmlo.responseText;
}
xmlo.send();
if(filename!="home.html")
menu.style.display="block";
}

</script>
<style>
#heading{
//border-style:none none solid none;
//border-color:grey;
width:98%;
overflow:hidden;
height:15%;
background-color:salmon;
color:white;
padding:10px;
padding:20px;
border-radius:10px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#menu{
display:none;
border:none;
}


</style>

</head>
<body onload=contentChange("home.html") style="overflow:auto;">
<div id=heading><h1>INCOME TAX DEPARTMENT</h1><h2>Government of India</H2></div>
<div id=toolbar align=right>
<button>Visitors:<?php
		$myfile=fopen("visitorCount.txt","r");
		$cnt=intval(fread($myfile,10));
		fclose($myfile);
		$cnt++;
		$myfile2=fopen("visitorCount.txt","w");
		fwrite($myfile2,$cnt);
		fclose($myfile2);
		echo $cnt;
		?></button>
<button onclick=window.open("taxcalculator.html","_self") align=right> <?php echo "TAX CALCULATOR";?></button> <button onclick=window.open("incomelogin.php","_self") align=right><?php  if(isset($_SESSION['uname']))echo $_SESSION['uname'];else echo "LOGIN";?></button></div>
<div id=menu align=center>
<TABLE cellspacing=3>
<TR>
<TH><button onclick=contentChange("intro.html")> INTRODUCTION</button>
<TH><button onclick=contentChange("history.html")>HISTORY</button>
<TH><button onclick=contentChange("terms.html")>TAX TERMS</button>
<TH><button onclick=contentChange("rates.html")>TAX RATES</button>
<TH><button onclick=contentChange("deduct.html")>TAX DEDUCTION</button>
</TR>
</TABLE> 
</div>

<div align=center id=contentdiv>
<p id=content style="white-space:pre-wrap;" align=center>
</p>
</div>
</body>
</html>
