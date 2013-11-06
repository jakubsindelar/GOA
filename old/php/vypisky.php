<h1>Seznam výpisků</h1>
<?php
$sql = ("SELECT * FROM vypisky ORDER BY date DESC;");
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

 $date = date("d. m. Y [H:i]",$out[date]);
echo "<div id='kronika'>
<div id='kronika_text'>
<h2 style='text-align:left;height:30'>".iconv('windows-1250', 'utf-8', $out[name])."</h2>
$out[text]
</div>
<hr>
<div id='kronika_zapati' style='text-align:left;'>
Předmět:&nbsp;$subject<br>
Ze dne:$date<br>
Odkaz: <a href='vypisky/".iconv('windows-1250', 'utf-8', $out[name])."'>Stáhnout</a><br>
<hr>
</div>
</div>

<div id='kronika_space' style='height:20px'>
&nbsp;
</div>
";}
?>