<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Třída obchodní Akademie Gymnazia pro zrakově postižné - Praha-5 155 00</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
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
                  include("../config.php");
                  ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="description" content="Třídní web Obchodní Akademie z Gymnásia pro zrakově postižné">
    <meta name="author" content="Jakub Šindelář" />
  </head>
      <body>
        <div id="body"> 
            <header>
              <a href="./" style="text-decoration:none;">Třída Obchodní Akademie</a>
             </header>
        <span id="sloupec-l">
        <?php include("../sloupec-l.php"); ?>
        </span>
        <span id="sloupec-r">
        <?php 
          include("../sloupec-r.php");            
         ?>
        </span>
          <div id="zapati">
           Copiright © 2012 © Coding by <a href="mailto:fanatik@heroesofmemory.eu">Fanatik</a> Design by <a href="mailto:gimbo@seznam.cz">Gimbo</a>
          </div   
        </div>
      </body>
</html>