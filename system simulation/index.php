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
<h2 style="text-align:center">Enter the data!</h2>
<form method="post" action="new.php">
<br>
<table  style="margin-left:300px" >
<tr>
<td><h3>No.of Nodes:<h3></td>
<td><input name="a1" type="text" style="height:20px"></input></td>
</tr><tr>
<td><h3>Total No. of time Slots:</h3></td>
<td><input name="a2" type="text" style="height:20px"></input></td>
</tr>
</table><br>
<input value="Submit" type="submit" class="btn" style="margin-left:400px" ></input>
</form>
</div>

</body>
</html>