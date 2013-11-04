<?php
echo $con;
include("config.php");
$username = htmlspecialchars_decode(htmlspecialchars($_POST['username']));

$password = md5(htmlspecialchars_decode(htmlspecialchars($_POST['password'])));
$sql = ("SELECT * FROM users WHERE username= '".$username."' AND password = '".$password."';");
echo $sql;
$query = mysql_query($sql);
if(!mysql_num_rows($query) == 1) {echo "Nepodařilo se přihlásit";}
else
{
$expire=time()+60*10*360;
setcookie("user", "admin", $expire);
?>
<meta http-equiv="refresh" content="0;url=./">
<?php
}
?>