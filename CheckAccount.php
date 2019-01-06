<?php

$q="SELECT * FROM loginformdb WHERE username='".$UserName."'";

$re=mysqli_query($lnk,$q);

$data=mysqli_fetch_array($re,MYSQLI_NUM);


?>