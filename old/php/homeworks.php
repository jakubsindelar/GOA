<h1><u>Domácí úkoly</u></h1>
<?php
$sql = ("SELECT * ,DATE_FORMAT(date,'%d.%m.%Y') as datum FROM
homework order by datum desc;");
$query = mysql_query($sql);
while($out = mysql_fetch_array($query))
{
if($out['subject'] == 1) 
{$subject = "Čeština";}
elseif($out['subject'] == 2)
{$subject = "Angličtina";}
elseif($out['subject'] == 3)
{$subject = "Němčina";}
elseif($out['subject'] == 4)
{$subject = "Dějepis";}
elseif($out['subject'] == 5)
{$subject = "Občanská výchova";}
elseif($out['subject'] == 6)
{$subject = "Matematika";}
elseif($out['subject'] == 7)
{$subject = "Statistika";}
elseif($out['subject'] == 8)
{$subject = "Informační technologie&nbsp;";}
elseif($out['subject'] == 9)
{$subject = "Obchodní korespondence&nbsp;";}
elseif($out['subject'] == 10)
{$subject = "Zboží znalství";}
elseif($out['subject'] == 11)
{$subject = "Ekonomika";}
elseif($out['subject'] == 12)
{$subject = "Účetinictví";}
elseif($out['subject'] == 13)
{$subject = "Zeměpis";}


echo "<div id='homeworks_wiev'>
<h1 style=' text-align:center;'>$out[title]</h1>
Předmět:&nbsp;$subject<br>
Datum přidání:&nbsp;".date("d. m. Y", $out['date_in'])."<br>
Kdy odevzdat:&nbsp;$out[datum]<br>
Popis:&nbsp;$out[description]<br>
Přidal:&nbsp;$out[owner]
</div>";
}
?>