<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>  <!-- this is used to embed a background image-->

<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?>
	
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