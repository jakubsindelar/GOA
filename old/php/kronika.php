<h1>Třídní Kronika</h1>
<?php
$sql = ("SELECT * FROM kronika ORDER BY date DESC;");
$query = mysql_query($sql);
while($out = mysql_fetch_array($query))
{$date = date("d. m. Y [H:i]",$out[date]);
echo "<div id='kronika'>
<div id='kronika_text'>
<h2 style='text-align:left;height:30'>$out[name]</h2>
$out[text]
</div>
<hr>
<div id='kronika_zapati' style='text-align:left;'>
Autor:$out[owner]<br>
Přidáno dne:$date<br>
<hr>
</div>
</div>

<div id='kronika_space' style='height:20px'>
&nbsp;
</div>
";}
?>
  