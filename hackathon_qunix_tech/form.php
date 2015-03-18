<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php include 'head.php' ?>
	<h1 style="text-align:center;margin-left:auto;margin-right:auto;color:white">Login</h1>
	<div style="width:400px;height:500x;background-color:White;border-radius:5px;margin-left:auto;margin-right:auto;margin-top:20px;padding:20px">
	<form  action="page.php" method="post">
	<span>Username</span>&nbsp;&nbsp;<input type="text" name="name" ></input><br><br>
	<span>Password</span>&nbsp;&nbsp;&nbsp;<input type="text" name="pwd"></input><br><br>
	<select style="margin-left:120px" name="stud_type">
  <option value="student">Student</option>
  <option value="faculty">Faculty</option>
  <option value="hod">HOD</option>
  <option value="principal">Principal</option>
<option value="club">Student Club</option>

</select><br><br>
<input type="submit" value="Submit" style="margin-left:140px"></input>
</form>
</div>

<?php include "footer.php" ?>
</body>
</html>
