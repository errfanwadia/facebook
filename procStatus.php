<?php
include "conn.php";

if (isset($_GET['status'])) {
    // Escape any html characters
	$status=htmlentities($_GET['status']);
	$q="insert into status (status) values ('$status')";
	$a=mysql_query($q,$con);

	$q="select distinct status from status order by id desc";   //limit 3
	$p=mysql_query($q,$con);
	//$i=mysql_num_rows($p);
	
	$wall = " "; 
	while($row = mysql_fetch_array($p)){
		$wall=$wall."</br></br>"."\"".$row['status']."\"";
	//	echo $row['status'] , "</br>";
	}
	echo $wall;
//	echo "success";	
}
else{
	echo "fail";
}
?>