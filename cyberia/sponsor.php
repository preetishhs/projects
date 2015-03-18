
<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="ieee_favicon.ico" type="image/x-icon" />
   <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<style>


.f1_container {
  position: relative;
  margin: 10px auto;
  margin-bottom:50px;
    width:144px;
  height:144px;
  z-index: 1;
}
.f1_container {
  perspective: 1000;
}
.f1_card {
  width:144px;
  height:144px;
  transform-style: preserve-3d;
  transition: all 1.0s linear;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.cls2 {
position:relative;
margin:auto;
max-height:450px;
}
.cls1 {
position:relative;
margin:auto;
height:180px;
width:130px;
}
</style>
<body>
<?php include 'home_inc.php'; ?>

<br>
<h1 style="text-align:center;margin:auto;color:white"> PREVIOUS SPONSORS</h1>
<br><br>
<div style="margin-left:auto;margin-right:auto;width:610px;border:2px solid white">
    <a href="http://www.redhat.com/en"><img class="cls2" style ="align:center;" src="img/red-hat-logo.jpg" /></a><br>

    <a href="http://www.almamaterstore.in"><img class="cls1" src="img/alma_mater.jpg" /></a>
	&nbsp&nbsp&nbsp&nbsp&nbsp  
    <a href="http://time4education.com"><img class="cls1" src="img/time.jpg" /></a>
	&nbsp&nbsp&nbsp&nbsp&nbsp  
    <a href="http://"><img class="cls1" src="img/images.jpg" /></a>
	&nbsp&nbsp&nbsp&nbsp&nbsp  
	<a href="http://www.facebook.com/goteeapparel"><img class="cls1" src="img/Gotee.jpg" /></a>
</div>
	<br><br><br>

<?php include 'foot_inc.php'; ?> 
</body>
</html>