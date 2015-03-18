
<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="style.css" type="text/css" media="all">
<link rel="shortcut icon" href="ieee_favicon.ico" type="image/x-icon" />
</head>
<script src="jquery.min.js">
</script>


<script> 

var mem=0;
var len1;
var hig1;

function myfun(var1,var2,var3)
{

var len='+='+var1+'px';
var hig='-='+var2+'px';
var nam='.'+var3;
var cont='.'+var3+var3;

if(mem==var3)
{
return;
}

if(mem>0)
{
	var nam1='.'+mem;
	var len2='-='+len1+'px';
	var hig2='+='+hig1+'px';
	var cont2='.'+mem+mem;
	//$(nam1).css({position:'relative'});
	$(nam1).css({lineHeight:'30px'});
	if(var3<10)
{
	$(nam1).animate({left:'+=230px',width:'200px',height:'30px'},"fast");
	$(nam1).animate({top:hig2},"fast");
	$(nam1).animate({left:len2},"fast");
}
else {
	$(nam1).animate({right:'+=230px',width:'200px',height:'30px'},"fast");
	$(nam1).animate({top:hig2},"fast");
	$(nam1).animate({right:len2},"fast");
}
	//$(nam1).css({display:'none'});
	$(cont2).show(77);
	//$(cont2).css({display:'block'});
	$(nam1).css({position:'absolute'});
	$(nam1).css({cursor:'pointer'});

} 


if(var3!=mem)
{
	$(document).ready(function(){
	//$(".b").click(function(){
	$('#note').hide(111);
	$(cont).hide(444);
	$(nam).css({position:'relative'});
	$(nam).css({cursor:'auto'});
	$(nam).css({lineHeight:'18px'});
	if(var3<10)
{
	$(nam).animate({left:len},'6225');
	$(nam).animate({top:hig},"6225");
		
	$(nam).animate({left:'-=230px',width:'500px',height:'400px',borderRadius:8},"fast");
}
else
{
	$(nam).animate({right:len},'6225');
	$(nam).animate({top:hig},"6225");
		
	$(nam).animate({right:'+=30px',width:'500px',height:'400px',borderRadius:8},"fast");

}	
	mem=var3;
	len1=len;
	hig1=hig;

  });
 }
 }
 
 

	

</script> 

<style>




  .button-success
        {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
	 //background: rgb(28, 184, 65);
	background:#3d6a1b;
	margin-left:240px;
font-size:22px;
        }

        


body {

background-color:black;


}

#container
{
width:960px;height:520px;position:relative;
//background-color:pink;
margin:0 auto;
}

.events 
{
	width:200px;
	height:30px;
	background-color:#191919;
	color:white;
	margin:;
	position:absolute;
	float:left;
	text-align:center;
	overflow:hidden;
	z-index:4;
	font-size:15px;
	line-height: 30px;
	border-radius:5px;
	


}
.events
{
    width:200px;
	height:30px;
	background-color:#191919;
	color:white;
	position:absolute;
	right:0%;
	text-align:center;
	overflow:hidden;
	z-index:4;
	font-size:15px;
	line-height: 30px;
	border-radius:5px;
	
}

.event1
{
	width:100%;
	height:100%;
	background-color:#191919;
	z-index:999;
	background-image: url('back.png');
}

.event1:hover
{	
	background-color:#191919;
}

.events:hover
{	
	background-color:#e50005;
	//color:green;
	cursor:pointer;
}

.events:hover
{	
	background-color:#e50005;
	//color:green;
	cursor:pointer;
}

#content
{

width:640px;
position:relative;
margin:0 auto;
font-size:18px;
text-align:justify;
}

</style>


<body>
<?php include 'home_inc.php'; ?>
<br><br>
<div  id="container" >

<div style="width:220px;height:420px;background-color:black;color:white;margin-bottom:7px;float:left;position:relative"> 

<div class="events 1" onclick="myfun(470,0,'1')" ><div class="11" style="margin-bottom:6px;display:block">PANEL DISCUSSION</div>
<div class="event1">
<br><p style="font-size:36px">PANEL DISCUSSION</p>
</div></div><br><br>

<div class="events 2" onclick="myfun(470,40,'2')" ><div class="22" style="margin-bottom:6px;display:block">ETHICAL HACKING</div>
<div class="event1"><br><p style="font-size:36px">ETHICAL HACKING WORKSHOP BY <br><br> SUNNY VAGELA</p>
</div></div><br><br>

<div class="events 3" onclick="myfun(470,80,'3')" ><div class="33" style="margin-bottom:6px;display:block">ROBOTICS WORKSHOP</div>
<div class="event1"><br>
<p style="font-size:36px">ROBOTICS WORKSHOP</p>
</div></div><br><br>

<div class="events 4" onclick="myfun(470,120,'4')" ><div class="44" style="margin-bottom:6px;display:block">JUNKYARD</div>
<div class="event1"><br>
<p style="font-size:36px">JUNKYARD</p>
</div></div><br><br>

<div class="events 5" onclick="myfun(470,160,'5')" ><div class="55" style="margin-bottom:6px;display:block">PAPYRUS</div>
<div class="event1"><br>
<p style="font-size:36px">PAPYRUS</p>	
</div></div><br><br>

<div class="events 6" onclick="myfun(470,200,'6')" ><div class="66" style="margin-bottom:6px;display:block">EUREKHA</div>
<div class="event1"><br>
<p style="font-size:36px">EUREKHA</p>
</div></div><br><br>

<div class="events 7" onclick="myfun(470,240,'7')" ><div class="77" style="margin-bottom:6px;display:block"> EL-DORADO</div>
<div class="event1"><br>
<p style="font-size:36px">EL-DORADO</p>
</div></div><br><br>

<div class="events 8" onclick="myfun(470,280,'8')" ><div class="88" style="margin-bottom:6px;display:block"> NIGHT-OUT</div>
<div class="event1"><br>
<p style="font-size:36px">NIGHT-OUT</p>
</div></div><br><br>

<div class="events 9" onclick="myfun(470,320,'9')" ><div class="99" style="margin-bottom:6px;display:block">WEBMANIA</div>
<div class="event1"><br>
<p style="font-size:36px">WEBMANIA</p>
</div></div><br><br>
</div>

<!-- text and cyberia logo -->
<div id="note" style="height:500px;width:400px;float:left"><br><br><br>
	<img src="mesh.png" style="width:250px;height:200px;margin-left:150px;"><br><br>
	<p style="font-size:30px;color:white;margin-left:90px">Click on the Events to know the details</p>
</div>

<div style="width:220px;height:420px;background-color:blue;color:white;margin-bottom:7px;float:right;position:relative"> 

	<div class="events 10" onclick="myfun(470,0,'10')" ><div class="1010" style="margin-bottom:6px;display:block"> EXQUIZZITTE</div>
		<div class="event1"><br>
			<p style="font-size:36px"> EXQUIZZITTE</p>
		</div>	
	</div><br><br>

	<div class="events 12" onclick="myfun(470,40,'12')" ><div class="1212" style="margin-bottom:6px;display:block">AMAZE</div>
		<div class="event1"><br>
			<p style="font-size:36px"> EXQUIZZITTE</p>
		</div>	
	</div><br><br>

	<div class="events 13" onclick="myfun(470,80,'13')" ><div class="1313" style="margin-bottom:6px;display:block">MOCK PLACEMENTS</div>
	<div class="event1"><br>	
			<p style="font-size:36px"> EXQUIZZITTE</p>
		</div>	
	</div><br><br>

	<div class="events 14" onclick="myfun(470,120,'14')" ><div class="1414" style="margin-bottom:6px;display:block">MOCK PLACEMENTS</div>
	<div class="event1"><br>
			<p style="font-size:36px"> EXQUIZZITTE</p>
		</div>	
	</div><br><br>
</div>

</div>
<?php include 'foot_inc.php'; ?> 
</body>
</html>
