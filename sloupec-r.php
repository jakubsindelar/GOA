<?php
                  
if($_COOKIE["user"] != "admin")
{
if(!isset($_GET['link']))
{include("../uvod.php");}
elseif($_GET['link'] == classroom)
{include("../trida.php");}
elseif($_GET['link'] == "contacts")
{include("../scripts/kontakty.php");}
elseif($_GET['link'] == homeworks)
{include("./homeworks.php");}
elseif($_GET['link'] == notes)
{include("./vypisky.php");}
elseif($_GET['link'] == tests)
{include("./testy.php");}
elseif($_GET['link'] == timelists)
{include("./termin_charter.php");}
elseif($_GET['link'] == timetable)
{include("./rozvrh.php");}
elseif($_GET['link'] == suplovani)
{include("./suplovani.php");}
elseif($_GET['link'] == administrace)
{include("login.php");}
}
elseif($_COOKIE["user"] == "admin")
{
if($_GET['link'] == classroom)
{include("../trida.php");}
elseif($_GET['link'] == contacts)
{include("../scripts/kontakty.php");}
elseif($_GET['link'] == homeworks)
{include("./homeworks.php");}
elseif($_GET['link'] == notes)
{include("./vypisky.php");}
elseif($_GET['link'] == tests)
{include("./testy.php");}
elseif($_GET['link'] == timelists)
{include("./termin_charter.php");}
elseif($_GET['link'] == timetable)
{include("./rozvrh.php");}
elseif($_GET['link'] == suplovani)
{include("./suplovani.php");}
elseif($_GET['link'] == administrace)
{include("./login.php");}
elseif($_GET['admin'] == homeworks) {include("scripts/admin/homeworks.php");}
elseif($_GET['admin'] == testy) {include("administrace/testy.php");}
elseif($_GET['admin'] == vypisky){include("administrace/vypisky.php");}
elseif($_GET['admin'] == suplovani){include("administrace/suplovani.php");}
}  
?>