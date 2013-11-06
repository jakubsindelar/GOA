<?php
if(isset($del) AND !empty($del))
{
$sql = ("DELETE FROM homework WHERE id = '".$del."';");
$query = mysql_query($sql);
}
?>
<h1>Přidat domácí úkoly</h1>
<div id='homeworks_add'>
<form method="POST">
Název:<br>
<input type="text" name="title"><br>
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
Datum odevzdání:<br>                   
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
<input type="text" name="year" size="4" value="<?php echo date('Y');?>" maxlength="4">
<br>
Popis:<br>
<textarea name="description" rows="5" cols="40"></textarea><br>
<br>
<input type="submit" value="Přidej">
</form>
</div>
<?php
if(
isset($_POST['title']) AND !empty($_POST['title'])
and
isset($_POST['subject']) AND !empty($_POST['subject'])
and
isset($_POST['day']) AND !empty($_POST['day'])
and
isset($_POST['month']) AND !empty($_POST['month'])
and
isset($_POST['year']) AND !empty($_POST['year'])
and
isset($_POST['description']) AND !empty($_POST['description']))
{
$date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
$sql = ("INSERT INTO homework (owner, title, subject, date, description, date_in) VALUES('0', '".$_POST['title']."', '".$_POST['subject']."', '".$date."' , '".$_POST['description']."', '".time()."')");
$query = mysql_query($sql);
if($query == true)
{echo "<script>alert(\"Úkol byl přidán\");</script>";}
else {echo "<script>alert(\"Někde se stala chyba\");</script>";}
}
?>
<div id="homework_admin">
<div id="homework_150px">
Název:
</div>
<div id="homework_150px">
Přidal:
</div>
<div id="homework_150px">
Přidáno:
</div>
<div id="homework_150px">
Kdy odevzdat
</div>
<div id="homework_50px">
Akce:
</div>

<?php
$sql = ("SELECT *, DATE_FORMAT(date,'%d.%m.%Y') as datum FROM
homework order by datum");
$query = mysql_query($sql);
while($out = mysql_fetch_array($query))
{
echo "<div id='homework_150px'>
$out[title]
</div>
<div id='homework_150px'>
$out[owner]
</div>
<div id='homework_150px'>
".date("d. m. Y", $out['date_in'])."
</div>
<div id='homework_150px'>
$out[datum]
</div>
<div id='homework_50px'>
<a href='?$_SERVER[QUERY_STRING]&del=$out[id]'>Smazat</a>
</div>
";
}

?>


</div>