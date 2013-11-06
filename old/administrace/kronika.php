<?php
//mazání
if(isset($_GET['id']))
{
$sql = ("DELETE FROM kronika WHERE id='".$_GET['id']."'");
$query = mysql_query($sql);
if($query == true)
{echo "<script>alert(\"Článek Byl smazán\");</script>";}
else {echo "<script>alert(\"Něco se pokazilo\");</script>";}
}
?>
<h1>Přidat článek</h1>
<form method="POST">
<div id="admin_kronika">
Název:
<div id="admin_kronika_left">
<input type="text" name="name">
</div>
Text:
<div id="admin_kronika_right">
<textarea name="text" rows="20" cols="50"></textarea>
</div>
<input type="submit" value="Vložit">
</div>
</form>
<?php

if(isset($_POST['name']) and isset($_POST['text']) and !empty($_POST['name']) and !empty($_POST['text']))
{
$date = time();
$sql = ("INSERT INTO kronika (owner, name, date, text) VALUES('-','".$_POST['name']."','".$date."','".$_POST['text']."');");
$query = mysql_query($sql);
if($query == true)
{echo "<script>alert(\"Příspěvek byl přidán\");</script>";}
else {echo "<script>alert(\"Něco se pokazilo\");</script>";}
}
$sql = ("SELECT name, id, owner FROM kronika");
$query = mysql_query($sql);
echo "<div id='db_show' style='width:350px;margin:0 auto;'>
<div id='db_show_sloupec' style='width:150px;float:left;'>
Název:
</div>
<div id='db_show_sloupec' style='width:150px;float:left;'>
Článek přidal:
</div>
<div id='db_show_sloupec' style='width:50px;float:left;'>
Akce:
</div>
</div>
";
while($output = mysql_fetch_array($query)){
echo "<div id='db_show' style='width:350px;margin:0 auto;'>
<div id='db_show_sloupec' style='width:150px;float:left;'>
$output[name]
</div>
<div id='db_show_sloupec' style='width:150px;float:left;'>
$output[owner]
</div>
<div id='db_show_sloupec' style='width:50px;float:left;'>
<a href='?$_SERVER[QUERY_STRING]&id=$output[id]'>Smazat</a>
</div>
</div>
";}

?>