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
	<h1 style="text-align:center;margin-left:auto;margin-right:auto;color:white">Welcome!!</h1>
	
	<div style="margin-left:auto;margin-right:auto;width:1000px;height:800px;border:1px solid white;padding:15px;border-radius:5px">
	<div style="float:left;width:230px;height:500px;background-color:gray;border-radius:5px;padding:5px">
	<form action="page.php" method="post">
	Search:<input type="text" name="search"></input>
	<input type="submit" value="Go!" ></input>
	</form>
	<br>
	<hr>
	    <div style="width:200px;height:300px;background-color:white;border-radius:5px;margin-left:15px;margin-top:40px  ">
	        <h3 style="text-align:center">Notifications</h3>
	        <hr>
	        <marquee direction="up">
	        <p>
	        Fosscamp 14 on 18th Oct!!<br><br>
	        IEEE DAY on 18th!<br><br>
	        Exams next week!<br><br>
	        Holidays from 22nd to 28th<br><br>
	        </marquee>
	    </div>
	
	</div>
	    <div style="margin-left:50px;float:left;width:700px;height:800px;background-color:gray;border-radius:5px;padding:5px">
	    
	        <div style="width:600px;height:200px;background-color:white;border-radius:5px;margin-left:50px;margin-top:40px;padding:5px ">
	        <h3 style="text-align:center">Whats in your mind!</h3>
            <form action="page.php" method="post">
	       Post on Wall<br><textarea type="text" name="search"style="width:550px;height:70px"></textarea>
	       <br><br>
	       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      
	       <select style="margin-left:120px" name="">
  <option value="">Assignments</option>
  <option value="">Test scores</option>
  <option value="">Technical event</option>
  <option value="">Informal event</option>
  <option value="">Sports</option>
  <option value="">Exams</option>
  <option value="">News</option>
  <option value="">Fest</option>


</select>
	       <input type="submit" value="Go!" ></input>
	       
	    </form>
	    </div>
	    
	    <div style="width:600px;height:460px;background-color:white;border-radius:5px;margin-left:50px;margin-top:40px;padding:5px ">
	        <h3 style="text-align:center">Activity Wall!</h3>
	           <hr>
            
	    </div>
	    
	    </div>
	</div>

<?php include "footer.php" ?>
</body>
</html>
