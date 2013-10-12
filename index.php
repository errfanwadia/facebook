<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook</title>

<script>
function updateStatus()
{
	var stat=document.getElementById("status").value;
	if(stat==""){
		alert("Please enter the status");
		return;
	}
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		document.getElementById("wall").innerHTML=xmlhttp.responseText;
		document.getElementById("status").value="";
    }
  }
xmlhttp.open("get","procStatus.php?status="+stat,true);
xmlhttp.send();
}

</script>

</head>
<body>
<table align="center">
	<tr>
    	<td><textarea id="status" name="status"></textarea></td>
        <td><input type="button" value="Post" onclick="updateStatus()">
        </td>
    </tr>
</table>

<div style="text-align:center">WALL</div>
<table align="center">
	<tr>
    	<td><div id="wall"></div></td>
    </tr>
</table>
</body>
</html>