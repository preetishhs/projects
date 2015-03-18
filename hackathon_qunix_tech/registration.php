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
	
	<h1 style="text-align:center;margin-left:auto;margin-right:auto;color:white">Registraton</h1>
	<div style="width:400px;height:500x;background-color:White;border-radius:5px;margin-left:auto;margin-right:auto;margin-top:20px;padding:20px">
	<form  action="form.php" method="post">
	<span>Username</span>&nbsp;&nbsp;<input type="text" name="name" ></input><br><br>
	<span>Password</span>&nbsp;&nbsp;&nbsp;<input type="password" name="pwd"></input><br><br>
	<select style="margin-left:120px" name="stud_type">
  <option value="student">Student</option>
  <option value="faculty">Faculty</option>
  <option value="hod">HOD</option>
  <option value="principal">Principal</option>
<option value="club">Student Club</option>
</select><br><br>
<input type="checkbox" name="assign" value="assign">Assignments
<input type="checkbox" name="test" value="test">Test scores

<input type="checkbox" name="tech" value="tech">Technical event
<input type="checkbox" name="informal" value="informal">Informal event

<input type="checkbox" name="sports" value="sports">Sports
<input type="checkbox" name="exams" value="exams">Exams

<input type="checkbox" name="news" value="news">News
<input type="checkbox" name="fest" value="fest">Fest

<br><input type="submit" value="Submit" style="margin-left:140px"></input>
</form>
</div>

<?php
 if(!empty($_POST['check_list'])){
     foreach($_POST['check_list'] as $report_id){
        echo "$report_id was checked! ";
     }
   }
?>
<?php include "footer.php" ?>
</body>
</html>
