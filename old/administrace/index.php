<?php

if($_GET['logining'] == 1)
{
$username = htmlspecialchars_decode(htmlspecialchars($_POST['username']));
$password = md5(htmlspecialchars_decode(htmlspecialchars($_POST['password'])));
$sql = ("SELECT * FROM users WHERE username= '".$username."' AND password = '".$password."';");
$query = mysql_query($sql);
if(!mysql_num_rows($query) == 1) {echo "Nepodařilo se přihlásit";}
else {?><meta http-equiv="refresh" content="0;url=?<?php echo 'link='.$_GET['link'].'&administrace=loged';?>"><?php }
}
if(!isset($_GET['administrace']))
{?>
<form method="POST" action="?link=administrace&logining=1">
<div id="admin_login_form" style="width:300px;margin:0 auto;">
<div id="admin_login_form_pole" style="width:100px; float:left;">
Jméno:
</div>
<div id="admin_login_form_pole" style="width:200px; float:left;">
<input type="text" name="username">
</div>





<div id="admin_login_form_pole" style="width:100px; float:left;">
Heslo:
</div>
<div id="admin_login_form_pole" style="width:200px; float:left;">
<input type="password" name="password">
</div>

<div id="admin_login_form_submit">
<input type="submit" value="Přihlásit">
</div>
</div>
</form>
<?php
}

elseif($_GET['administrace'] == loged)
{
?>
<div id="admin_panel" style="height:100px;">
<a href="<?php echo '?link='.$_GET['link'].'&administrace='.$_GET['administrace'].'&admin=kronika';?>">Kronika</a> | <a href="?<?php echo 'link='.$_GET['link'].'&administrace='.$_GET['administrace'];?>&admin=homeworks">Domácí úkoly</a> | <a href="?<?php echo 'link='.$_GET['link'].'&administrace='.$_GET['administrace'];?>&admin=vypisky">Výpisky</a> | <a href="?<?php echo 'link='.$_GET['link'].'&administrace='.$_GET['administrace'];?>&admin=testy">Testy</a> | <a href="?<?php echo 'link='.$_GET['link'].'&administrace='.$_GET['administrace'];?>&admin=suplovani">Suplování</a>
</div>

<?php

if($_GET['admin'] == kronika) {include("kronika.php");}
elseif($_GET['admin'] == homeworks) {include("homeworks.php");}
elseif($_GET['admin'] == testy) {include("testy.php");}
elseif($_GET['admin'] == vypisky){include("vypisky.php");}
elseif($_GET['admin'] == suplovani){include("suplovani.php");}


}


?>
