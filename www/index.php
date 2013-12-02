<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
  <HEAD>
    <TITLE>Třída obchodní Akademie Gymnazia pro zrakově postižné - Praha-5 155 00</TITLE>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <META http-equiv="X-UA-Compatible" content="IE=9" />
            <?php 
            /*Script na vložení veškerého css*/
                  $dir= "css";
                  $read = opendir($dir);
                  while($files = readdir($read))
                  {
                  if($files == "." or $files == "..")
                  echo "";
                  else
                  echo "<link rel=\"stylesheet\" href=\"./".$dir."/".$files."\">\n";
                  }
                  /*Konec scriptu pro css*/        
                  
                  ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <META name="description" content="Třídní web Obchodní Akademie z Gymnásia pro zrakově postižné">
    <META name="author" content="Jakub Šindelář" />
  </HEAD>
      <BODY>
        <DIV id="body"> 
            <HEADER>
              <A href="./" style="text-decoration:none;">Třída Obchodní Akademie</A>
             </HEADER>
        <SPAN id="sloupec-l">
        <?php include("../sloupec-l.php"); ?>
        </SPAN>
        <SPAN id="sloupec-r">
        <?php 
          echo $_POST['error'];
          include("../config.php");
          include("../sloupec-r.php");
                    if($_POST['action'] == "login")
          {include("../logining.php");}
          
          elseif($_GET['action'] == "logout")
{
$expire=time()-60*10;
setcookie("user", "admin", $expire);
?><meta http-equiv="refresh" content="0;url=./"><?php
}
           
         ?>
        </SPAN>
          <DIV id="zapati">
           Copiright © 2012 © Coding by <A href="mailto:fanatik@heroesofmemory.eu">Fanatik</A> Design by <A href="mailto:gimbo@seznam.cz">Gimbo</A>
          </DIV   
        </DIV>
      </BODY>
</HTML>