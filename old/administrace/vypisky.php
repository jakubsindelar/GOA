
<h1>Přidat výpisky</h1>
<form method="POST" action="?<?php echo 'link='.$_GET['link'].'&administrace='.$_GET['administrace'].'&admin='.$_GET['admin'].'&send=yes';?>" enctype="multipart/form-data" accept-charset="WINDOWS-1250">
 <label for="file">Filename:</label>
Předmět:
<br>
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
<br>
<input type="file" name="file" id="file" /> 
 <br />
 <br>
 <input type="submit" name="submit" value="Ulož" />
</form>
<div>
<?php 
$sql = ("SELECT * FROM vypisky;");
$query = mysql_query($sql);
while($out = mysql_fetch_array($query))
{echo "<a id='vypisky_admin_wiev' href='?link=".$_GET['link']."&administrace=".$_GET['administrace']."&admin=".$_GET['admin']."&id=".$out['id']."'>".iconv('windows-1250', 'utf-8', $out['name'])."<br>";}
?>
</div>
<?php
if($_GET['send'] == yes)
{
 if (!(($_FILES["file"]["type"] == "application/octet-stream")
 || ($_FILES["file"]["type"] == "text/css")
 || ($_FILES["file"]["type"] == "text/html"))
 && ($_FILES["file"]["size"] < 16777216))
   {
   if ($_FILES["file"]["error"] > 0)
     {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
     }
   else
     {
     if (file_exists("./vypisky/" . $_FILES["file"]["name"]))
       {
       echo $_FILES["file"]["name"] . " allredy exist. ";
       }
     else
       {
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "./vypisky/" . $_FILES["file"]["name"]);
//db
include("config.php");
$sql = ("INSERT INTO vypisky (owner, subject, name, date) VALUES('0','".$_POST['subject']."','".$_FILES['file']['name']."', '".time()."');");
mysql_query($sql);
       echo "File has been uplouded succesfully";
       }
     }
   }
 else
   {
   echo "Invalid file";
   }
 }
 
 //if(isset($_GET['id']))
 //{
 //$sql = ("DELETE FROM vypisky WHERE id='".$_GET['id']."';");
 //$query = mysql_query($sql);
 
 //}
 ?>