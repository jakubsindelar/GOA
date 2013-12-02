<?php
$username = htmlspecialchars_decode(htmlspecialchars($_POST['username']));
$password = md5(htmlspecialchars_decode(htmlspecialchars($_POST['password'])));
$sql = ("SELECT * FROM users WHERE username= '".$username."' AND password = '".$password."';");
$query = mysql_query($sql);
echo $con;
if(!mysql_num_rows($query) == 1) 
{
?>
<form name="mysql_error" method="POST" action="index.php">
<input type="hidden" name="error" value="Nepodařilo se přihlásit">  
</form>
<script>
  document.mysql_error.submit();
</script>
<?php
}
else
{
$expire=time()+60*10*360;
setcookie("user", "admin", $expire);
?>
<meta http-equiv="refresh" content="0;url=./">
<?php
}
?>