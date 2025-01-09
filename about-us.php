<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">

</head>
<body>  <!-- this is used to embed a background image-->

<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?>

<script>

<!--This is to control the user accessiblty to make make text size larger-->

function Mediumfontsize()
{
document.getElementById("apDiv110").style.fontSize="115%";
document.getElementById("apDiv110").style.color="black";
document.getElementById("apDiv110").style.fontStyle="normal";

}

function Largefontsize()
{
document.getElementById("apDiv110").style.fontSize="130%";
document.getElementById("apDiv110").style.color="black";
document.getElementById("apDiv110").style.fontStyle="normal";
}

</script>

<article> 
	<h1>About us</h1>
	
	
	<p>The Star Shoes company is established in year 2024 and the founder name is Sahar Tebyanian. 
	In the starting days, company used to sale shoes only for women but when the company get popular 
	then they start to make shoes for kids and men as well.</p>
	<h2>Legislation (Data Protection Act 1998)</h2>
	<p>Data Protection Act 1998 is a law that is designed to protect personal data which is stored on computer or in an TSS paper-based filing system. 
	DPA controls how anyone personal information is used by a company or the government. This act covers that how confidential data should be 
	assessed and used. This act protects company and buyers information such as customers personal information when they shop. 
	This act does this by using 8 principles, to make sure that all confidential data is safe and confidential. For example, these principles are
	keeping information safe and secure & not transferring it to another country that does not have data protection outside the EU or worldwide. 
	
	The act also protects seller information such as TSS company information because their own personal details as well as 
	confidential or sensitive details. These may be new design of shoes, business secrets, etc.  </p>

		
		
</article>

</div>
<div id="buttons">
	<button type="button" onclick ="Mediumfontsize()">Medium</button>
	<button type="button" onclick ="Largefontsize()">Large</button><br>
	<br>
</div>

<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>


</body>
</html>