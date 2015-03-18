
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
	$(nam1).animate({left:'+=230px',width:'200px',height:'30px'},"fast");
	$(nam1).animate({top:hig2},"fast");
	$(nam1).animate({left:len2},"fast");
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
	$(nam).animate({left:len},'6225');
	$(nam).animate({top:hig},"6225");
		
	$(nam).animate({left:'-=230px',width:'680px',height:'480px',borderRadius:8},"fast");
	
	mem=var3;
	len1=len;
	hig1=hig;

  });
  //});

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

<div style="width:220px;height:440px;background-color:black;color:white;margin-bottom:7px;float:left;position:relative"> 

<div class="events 1" onclick="myfun(470,0,'1')" >
<div class="11" >PANEL DISCUSSION</div>
<div class="event1">
<br><p style="font-size:36px">PANEL DISCUSSION</p>
	<br><div id="content">
	<h3>You and your thoughts!</h3>
Providing an opportunity by eminent personalities both from the industry and academic debate on a topic relevant to the present scenario for a group to hear several people knowledgeable about a specific issue or topic present scenario and discuss personal views and helping the audience further clarify and evaluate their positions regarding specific issues or topics being discussed and increase their understanding and position of others.

<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');">Register Now</button>
  </div>
</div></div>
<br><br>

<div class="events 2" onclick="myfun(470,40,'2')" ><div class="22" style="margin-bottom:6px;display:block">VARUN AGARVAL (TALK)</div>
<div class="event1"><br><p style="font-size:36px">TALK BY VARUN AGARVAL</p>
	<br><div id="content"><img src="varun.jpg" style="height:180px;width:150px;float:left;padding-right:10px">
	Varun Agarwal is a first-generation entrepreneur, film maker and author.He co-founded Alma Mater and two other companies - Reticular and Last Minute Films. He is also the only author of a book How I Braved Anu Aunty and Co-Founded A Million Dollar Company.
<br><br><br><br><br><br><br><br><br><br>
  <button class="button-success pure-button" v >Register Now</button></div>
</div></div><br><br>

<div class="events 3" onclick="myfun(470,80,'3')" ><div class="33" style="margin-bottom:6px;display:block">ROBOTICS WORKSHOP</div>
<div class="event1"><br>
<p style="font-size:36px">ROBOTICS WORKSHOP</p>
	<br><div id="content">
	
<h1 style="padding-left:200px">Coming Soon!!</h1>
<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 4" onclick="myfun(470,120,'4')" ><div class="44" style="margin-bottom:6px;display:block">JUNKYARD</div>
<div class="event1"><br>
<p style="font-size:36px">JUNKYARD</p>
	<br><div id="content">
	<h3>TO SKY FROM SCRAP!!</h3> This is an event where you utilize the given scrap things to the best possible extent and build bigger and useful materials. This is all about your imagination and skill in optimizing the essentials.
<br><br><br><br><br><br><br><br>
  <button class="button-success pure-button"  ONCLICK="window.open('http://www.cyberia14.doattend.com');" target="_blank">Register Now</button></div>
</div></div><br><br>

<div class="events 5" onclick="myfun(470,160,'5')" ><div class="55" style="margin-bottom:6px;display:block">PAPYRUS</div>
<div class="event1"><br>
<p style="font-size:36px">PAPYRUS</p>
	<br><div id="content">Shine with your skill!
Papyrus is a national level student technical paper presentation event, it’s all about how you put your topic or present your topic in front of the others, about the way you present it,  way you put your points and the style of presenting the paper and language you present the topic in. Your  ideal platform for sharing innovative ideas. It’s divided into four sessions to help participants and audience choose their choice of interest.

<br><br><br><br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 6" onclick="myfun(470,200,'6')" ><div class="66" style="margin-bottom:6px;display:block">EUREKHA</div>
<div class="event1"><br>
<p style="font-size:36px">EUREKHA</p>
	<br><div id="content">
	<h1 style="padding-left:200px">Coming Soon!!</h1>

<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 7" onclick="myfun(470,240,'7')" ><div class="77" style="margin-bottom:6px;display:block"> EL-DORADO</div>
<div class="event1"><br>
<p style="font-size:36px">EL-DORADO</p>
	<br><div id="content">
	THE TREASURE IS YOURS!! El-dorado is an online treasure hunt conducted on our website which is open to all. Participants pour in for registrations from all around the world. More amazingly, the event is three day long. Participants can keep a track of their level comparing others who have reached better levels through the score board which adds to the fierceness of the competition. 
<br><br><br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 8" onclick="myfun(470,280,'8')" ><div class="88" style="margin-bottom:6px;display:block"> NIGHT-OUT</div>
<div class="event1"><br>
<p style="font-size:36px">NIGHT-OUT</p>
	<br><div id="content">
	<h3>CODE AT NIGHT!!!</h3> Night-Out is a coding contest with a difference, the deviation being its time of conduct- the creepy hours of the night. Participants need to submerge themselves into the darkness, with the constraint of finding the best code for a given problem & need to emerge out successful by dawn. <br><br>

Perseverance, potential & the will to work under pressure were the traits required of a participant. The problem was laid before the participants in the evening and they had to present a suitable code in "C" by the next morning. One night in hand was both the fun part as well as the most drilling part of this event .The coding drama deepened along with the passing hours of the night. Zealous contestants battled against the odd hours, armed with the proficiency in the subject & the insight to employ their skills, & accomplished the task assigned. 

<br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 9" onclick="myfun(470,320,'9')" ><div class="99" style="margin-bottom:6px;display:block">WEBMANIA</div>
<div class="event1"><br>
<p style="font-size:36px">WEBMANIA</p>
	<br><div style="width:640px;position:relative;margin:0 auto;font-size:18px;text-align:justify">
	<h1 style="padding-left:200px">Coming Soon!!</h1>
<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 10" onclick="myfun(470,360,'10')" ><div class="1010" style="margin-bottom:6px;display:block"> EXQUIZZITTE</div>
<div class="event1"><br>
<p style="font-size:36px"> EXQUIZZITTE</p>
	<br><div id="content">
	<h1 style="padding-left:200px">Coming Soon!!</h1>
<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 12" onclick="myfun(470,400,'12')" ><div class="1212" style="margin-bottom:6px;display:block">AMAZE</div>
<div class="event1"><br>
<p style="font-size:36px">AMAZE</p>
	<br><div id="content">
	Robotics is the part of electronics and running our own robot is the dream of us. Amaze is the platform for such aspirants. The participants are allowed to run their robots to solve the maze. This event is try improve the analytical ability and technical hunger of the participants. The cash price and other existing gifts are awarded for the participants to encourage them.
<br><br><br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');" >Register Now</button></div>
</div></div><br><br>

<div class="events 13" onclick="myfun(470,440,'13')" ><div class="1313" style="margin-bottom:6px;display:block">MOCK PLACEMENTS</div>
<div class="event1"><br>
<p style="font-size:36px">MOCK PLACEMENTS</p>
	<br><div id="content">
	<h3>Know your abilities!</h3>
 Mock placement is an event that acts as an essence during the company placements process. Students become used to this process and develop better skills in aptitude and will be able to face interviews with confidence by conducting interviews by the interviewers from the industry side. 

<br><br><br><br><br><br>
  <button class="button-success pure-button" ONCLICK="window.open('http://www.cyberia14.doattend.com');"  >Register Now</button></div>
</div></div><br><br>

</div>

<!-- text and cyberia logo -->
<div id="note" style="height:500px;width:650px;float:left"><br><br><br>
<img src="mesh.png" style="width:350px;height:270px;margin-left:150px;"><br><br>
<p style="font-size:30px;color:white;margin-left:90px">Click on the Events to know the details</p>
</div>

</div>
<br><br>
<?php include 'foot_inc.php'; ?> 
</body>
</html>
