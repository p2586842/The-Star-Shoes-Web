<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
<style>

div.container{
	width:100%
	border: 1px solid grey;
}

#footer{
padding: 1em;
color: white;
background-color: black;
clear: left;
text-align: center;
bottom:105%;
left:60%;
height:6%;
width:100%;
}

nav{
	float: left;
	max-width: 160%;
	margin: 0;
	padding: 1em;
}

nav ul{
	list-style-type: none;
}

nav ul a{
text-decoration: none;
}

article{
	margin-left: 2%;
	margin-bottom: 20%;
	margin-middle: 20%;
	border-left: 1% solid gray;
	padding: 7em;
	overflow: hidden;
}

#title  
{
width:4;
height:4;
padding: 0; 
color: black;
background-color:lightgreen;
clear: center;
text-align: center;
}

#Logo {
	position:absolute;
	width:442%;
	height:82%;
	left: 10%;
	top: 2%;
}
#nav  
{ 
padding:30;  
width:95%;   
height:10%;		
position:absolute;
top:20%;          
left:35%;			
font-size:30px;			
font-weight:bold;		
}
#home {
	position:absolute;
	width:130%;
	height:60%;
	z-index:4;
	left: 5%;
	top: 15%;
}
#aboutus
{
	position:absolute;
	width:130%;
	height:60%;
	z-index:5;
	left: 15%;
	top: 15%;
}
#men {
	position:absolute;
	width:161%;
	height:82%;
	z-index:6;
	left: 26%;
	top: 18%;
}
#women {
	position:absolute;
	width:161%;
	height:82%;
	z-index:6;
	left: 40%;
	top: 18%;
}
#kids {
	position:absolute;
	width:161%;
	height:82%;
	z-index:6;
	left: 55%;
	top: 18%;
}
#fran {
	position:absolute;
	width:161%;
	height:82%;
	z-index:6;
	left: 69%;
	top: 18%;
}
#contact {
	position:absolute;
	width:161%;
	height:82%;
	z-index:6;
	left: 83%;
	top: 18%;
}
#registration  
{	
width:12%;
height:12%;
position:absolute;
top:3.5%;
right:1%;
font-size:18px;	
font-weight:bold;
}
#login  
{	
width:12%;
height:12%;
position:absolute;
top:3.5%;
right:7%;
font-size:18px;	
font-weight:bold;
}
#map {
	position:absolute;
	width:442%;
	height:82%;
	z-index:1;
	left: 2%;
	top: 35%;
}
#form {
	position:absolute;
	width:442%;
	height:82%;
	z-index:1;
	left: 48%;
	top: 25%;
}
#address_1{
	position:absolute;
	width:442%;
	height:82%;
	z-index:1; 
	left: 65%;
	top: 30%;
}
#name_1{
	position:absolute;
	width:442px;
	height:82px;
	z-index:1;
	left: 54%;
	top: 38%;
}
#address_2{
	position:absolute;
	width:442%;
	height:82%;
	z-index:1;
	left: 82%;
	top: 30%;
}
#name_2{
	position:absolute;
	width:442px;
	height:82px;
	z-index:1;
	left: 70%;
	top: 38%;
}
#address_3{
	position:absolute;
	width:442%;
	height:82%;
	z-index:1;
	left: 75%;
	top: 50%;
}
#name_3{
	position:absolute;
	width:442px;
	height:82px;
	z-index:1;
	left: 63%;
	top: 58%;
}

</style>
</head>

<body>  <!-- this is used to embed a background image-->

<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?>	

	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.2729969862235!2d-0.19333512380395232!3d51.50820737181346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760ff8e2911563%3A0x9d1dd085a10933a5!2sKensington%20Palace%20Gardens%2C%20London%20W8%204QP!5e0!3m2!1sen!2suk!4v1734480666124!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	
<div id = "form">
 <h2>Order Form</h2>

<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value=" ">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value=" ">
  <br><br>
  Product ID:<br>
  <input type="text" name=" "value=" ">
  <br><br>

    <select name="shoes">
    <option value="Men">Men</option>
    <option value="Women">Women</option>
    <option value="Kids">Kids</option>
  </select>
  <br><br>

<h3>Message</h3>
<p>Specific message</p>

<form action="/action_page.php">
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
  
  <input type="submit">
</form> 
</div>

    
<div id="address_1">
 <h4>Lodnon Address 1</h4>
  <div align="center"><span class="style3">Kensongton Lodnon </span></div>
  <div align="center"><span class="style3">W8 4QP </span></div>
  <div align="center"><span class="style3">Tel:- 0121 446 2584 </span></div> 
</div>
<div id="name_1">
  <div align="center"><span class="style3"> London</span></div>
  <div align="center"><span class="style3">London</span></div>
  <div align="center"><span class="style3">Tel:- 020198 65 733</span></div> 

</div>		
	

</div>

<div id="address_2">
 <h4>London Address 2</h4>
</div>
<div id="name_2">
  <div align="center"><span class="style3">Richmond London</span></div>
  <div align="center"><span class="style3">W2 2UH</span></div>
  <div align="center"><span class="style3">Tel:- 0161 868 6858 </span></div> 

</div>		
	

</div>

<div id="address_3">
 <h4>London Address 3</h4>
</div>
<div id="name_3">
  <div align="center"><span class="style3">40, Victoria Street, London </span></div>
  <div align="center"><span class="style3">SW1H 0NB </span></div>
  <div align="center"><span class="style3">Tel:- 0121 365 8566 </span></div> 

</div>

<article>
</article>

<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>

</body>
</html>