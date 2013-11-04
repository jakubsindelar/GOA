<?php
if($_COOKIE["user"] != "admin")
{
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
{include("login.php");}
}
elseif($_COOKIE["user"] == "admin")
{
if($_GET['link'] == classroom)
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
{include("./login.php");}
elseif($_GET['admin'] == kronika) {include("administrace/kronika/main.php");}
elseif($_GET['admin'] == homeworks) {include("administrace/homeworks.php");}
elseif($_GET['admin'] == testy) {include("administrace/testy.php");}
elseif($_GET['admin'] == vypisky){include("administrace/vypisky.php");}
elseif($_GET['admin'] == suplovani){include("administrace/suplovani.php");}
}
?>