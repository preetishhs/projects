<!DOCTYPE html>

<style>

body
{
padding-top:0px;
margin:0px;
background-image:url('bg5.jpg'); 
background-repeat:repeat;
}

.btn {
  background: #d9344a;
  background-image: -webkit-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -moz-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -ms-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -o-linear-gradient(top, #d9344a, #b82b3d);
  background-image: linear-gradient(to bottom, #d9344a, #b82b3d);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  font-family: Arial;
  color: #ffffff;
  font-size: 22px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.attr
{
	width:60px;
	height:60px;
	position:absolute;
	background-image:url(wk2.png);
	z-index:9999;
}

.attr1
{
	z-index:9;
	width:6px;
	height:6px;
	background:red;
	position:absolute;
}

.attr2
{
	width:60px;
	height:60px;
	position:absolute;
	z-index:999;
}


</style>


<body>
<div style="padding-top:4px;color:white;width:100%;height:80px;background:black;margin-left:auto;margin-right:auto;text-align:center">
<h1>Adhoc Networks</h1>
</div>
<br><br>

<div style="border-radius:10px;width:990px;height:792px;margin-left:auto;margin-right:auto;border:2px solid black">
<br>
<?php
$k = 0;
$node = $_POST['a1'];
$time = $_POST['a2'];

echo "
<form action=\"new2.php\" method=\"post\">

	<table border=\"1\"><tr>
";
for($i=0;$i<$node;$i++)
{
//	$k = $k+1;
	echo "<td>
	<img src=\"router.png\" style=\"width:100px;height:100px;float:left;margin-left:20px;\"></td>";
}
echo"</tr><tr>";
for($i=0;$i<$node;$i++)
{
	echo "
		<td><input type=\"text\" name=\"a$i\" style=\"width:50px;height:15px\"></input></td> ";
}
echo"</tr></table>";
?>	
<input type="submit" value="submit"></input>


</form>
</div>

</body>
</html>