<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Třída obchodní Akademie Gymnasia pro zrakově postižné - Praha-5 155 00</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="description" content="Třídní web Obchodní Akademie z Gymnásia pro zrakově postižné">
<meta name="author" content="Jakub Šindelář" />
</head>
<body>
 <div id="obal"> 
 <?php
$con = mysql_connect("localhost", "it-teamoa.eu", "hatakekakashi-");
mysql_select_db("it-teamoa.eu");
?>
<header>
<a href="./" class="index">Třída Obchodní Akademie</a>
</header>
<span id="left">
<a>Třída</a><br>
<a href="./gallery">Fotogalerie</a><br>
<a href="?link=contacts">Kontakty</a><br>
<a href="?link=book">Třídní kronika</a><br>
Škola
<ul id="skola-seznam">
<li><a href="?link=homeworks">Domácí úkoly</a></li>
<li><a href="?link=notes">Výpisky</a></li>
<li><a href="?link=tests">Testy</a></li>
<li><a href="?link=timelists">Termínová listina</a></li>
<li><a href="?link=timetable">Rozvrh hodin</a></li>
<li>Suplování</li>
</ul>
<a href="http://goa.braillnet.cz">GOA</a><br>
<a href="http://goa.braillnet.cz:1080/ucebnice">E-učebnice</a><br>
<a href="https://aplikace.skolaonline.cz/SOL/Prihlaseni.aspx?ReturnUrl=%2fsol%2fApp%2fDefault.aspx">E-žákovská</a><br>
<a href="http://goa.braillnet.cz/nastenka">E-nástěnka</a><br>
<a href="http://videnohmatem.braillnet.cz">Viděno hmatem, o. s. </a><br>         
<a href="http://kdd.cz">KDD</a><br>
<a href="http://www.ktn.cz">KTN</a><br>
<a href="?link=administrace">Administrace</a>
</span>
<span id="right">
<?php  
if(!isset($_GET['link']))
{include("php/uvod.php");}
elseif($_GET['link'] == classroom)
{include("php/trida.php");}
elseif($_GET['link'] == contacts)
{include("php/kontakty.php");}
elseif($_GET['link'] == book)
{include("php/kronika.php");}
elseif($_GET['link'] == homeworks)
{include("php/homeworks.php");}
elseif($_GET['link'] == notes)
{include("php/vypisky.php");}
elseif($_GET['link'] == tests)
{include("php/testy.php");}
elseif($_GET['link'] == timelists)
{include("php/termin_charter.php");}
elseif($_GET['link'] == timetable)
{include("php/rozvrh.php");}
elseif($_GET['link'] == suplovani)
{include("php/suplovani.php");}
elseif($_GET['link'] == administrace)
{include("administrace/index.php");}
?>
</span>
<?mysql_close($con);?>
<div style="height:40px">&nbsp;</div>
 <div id="dno">
Copiright © 2012 © Coding by <a href="mailto:fanatik@heroesofmemory.eu">Fanatik</a> Design by <a href="mailto:gimbo@seznam.cz">Gimbo</a>
 </div>
 </div>
 
</body>
</html>
