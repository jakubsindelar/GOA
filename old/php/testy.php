<h1>Naplánované testy</h1>
<?php
$sql = ("SELECT * FROM testy ORDER BY date DESC;");
$subject = array("Čeština", "Angličtina", "Němčina", "Dějepis", "Občanská výchova", "Matematika", "Statistika", "Informační technologie&nbsp;", "Obchodní korespondence&nbsp;", "Zboží znalství", "Ekonomika", "Účetinictví", "Zeměpis");
$subject_num = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13");
$query = mysql_query($sql);
while($vystup = mysql_fetch_array($query))
{
$date = date("d. m. Y [H:i]",$vystup['date']);
if($vystup['subject'] == "1")
{$subject = "Čeština";}
elseif($vystup['subject'] == "2")
{$subject = "Angličtina";}
elseif($vystup['subject'] == "3")
{$subject = "Němčina";}
elseif($vystup['subject'] == "4")
{$subject = "Dějepis";}
elseif($vystup['subject'] == "5")
{$subject = "Občanská výchova";}
elseif($vystup['subject'] == "6")
{$subject = "Matematika";}
elseif($vystup['subject'] == "7")
{$subject = "Statistika";}
elseif($vystup['subject'] == "8")
{$subject = "Informatika";}
elseif($vystup['subject'] == "9")
{$subject = "Obchodní korespondence";}
elseif($vystup['subject'] == "10")
{$subject = "Zboží znalství";}
elseif($vystup['subject'] == "11")
{$subject = "Ekonomika";}
elseif($vystup['subject'] == "12")
{$subject = "Účetnictví";}
elseif($vystup['subject'] == "13")
{$subject = "Zeměpis";}
echo "<div id='kronika'>
<div id='kronika_text'>
<h2 style='text-align:left;height:30'>".$subject."</h2>
$vystup[text]
</div>
<hr>
<div id='kronika_zapati' style='text-align:left;'>
Autor:$vystup[owner]<br>
Přidáno dne:$date<br>
Datum testu: ".date("d. m. Y",StrToTime($vystup[date_in]))."<br>
<hr>
</div>
</div>

<div id='kronika_space' style='height:20px'>
&nbsp;
</div>";}
?>
