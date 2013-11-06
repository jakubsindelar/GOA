<h1>Testy</h1>
<?php
if($_GET['send'] == yes)
{
$date_in = time();
$date = "$_POST[year]-$_POST[month]-$_POST[day]";
$sql = ("INSERT INTO testy (owner, subject, text, date_in, date) VALUES('0', '".$_POST['subject']."', '".$_POST['text']."', '".$date."', '".$date_in."');");
$query = mysql_query($sql);
if($query == true)
{echo "<script>alert(\"Test Přidán\");</script>";}
}
?>
<form method="POST" action="?<?php echo "link=$_GET[link]&administrace=$_GET[administrace]&admin=$_GET[admin]"?>&send=yes">
Předmět:<br>
<select name="subject">
<option value="1">Čeština</option>
<option value="2">Angličtina</option>
<option value="3">Němčina</option>
<option value="4">Dějepis</option>
<option value="5">Občanská výchova</option>
<option value="6">Matematika</option>
<option value="7">Statistika</option>
<option value="8">Informační technologie&nbsp;</option>
<option value="9">Obchodní korespondence&nbsp;</option>
<option value="10">Zboží znalství</option>
<option value="11">Ekonomika</option>
<option value="12">Účetinictví</option>
<option value="13">Zeměpis</option>
</select>
<br>
Datum testu:<br>                   
<select name="day">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="month">
<option value="01">Leden</option>
<option value="02">Únor</option>
<option value="03">Březen</option>
<option value="04">Duben</option>
<option value="05">Květen</option>
<option value="06">Červen</option>
<option value="07">Červenec</option>
<option value="08">Srpen</option>
<option value="09">Září</option>
<option value="10">Říjen</option>
<option value="11">Listopad</option>
<option value="12">Prosinec</option>
</select>
<input type="text" name="year" size="4" maxlength="4" value="<?php echo date("Y");?>">
<br>
Zadání:
<br>
<textarea cols="20" rows="5" name="text"></textarea>
<br>
<br>
<input type="submit" value="Přidat">
</form>
<?php
$sql = ("SELECT * FROM testy;");
$query = mysql_query($sql);
while($out = mysql_fetch_array($query))
{
?>
<div style="background-color:green;width:800px;">
<?php echo $out['subject']."[".$out[
'date_in']."]";?>
</div>
<?php }?>
