<h1>Rozvrh hodin</h1>
<?php if(!isset($_GET['blind'])) 
{
?>
<div id="row">
<span id="window">od<br>-<br>do</span>
<span id="window">08:00<br>-<br>08:45</span>
<span id="window">08:55<br>-<br>09:40</span>
<span id="window">10:00<br>-<br>10:45</span>
<span id="window">10:55<br>-<br>11:40</span>
<span id="window">11:50<br>-<br>12:35</span>
<span id="window">12:40<br>-<br>13:25</span>
<span id="window">13:25<br>-<br>14:00</span>
<span id="window">14:00<br>-<br>14:45</span>
<span id="window">14:50<br>-<br>15:35</span>
</div>
<div id="row">
<span id="window">Den</span>
<span id="window">1</span>
<span id="window">2</span>
<span id="window">3</span>
<span id="window">4</span>
<span id="window">5</span>
<span id="window">6</span>
<span id="window">Pauza</span>
<span id="window">8</span>
<span id="window">9</span>
</div>
<div id="row">
<span id="window">PO</span>
<span id="window">Ú</span>
<span id="window">AJ</span>
<span id="window">AJ</span>
<span id="window">ČJ</span>
<span id="window">TV</span>
<span id="window">TV</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
</div>
<div id="row">
<span id="window">UT</span>
<span id="window">ČJ</span>
<span id="window">M</span>
<span id="window">NJ</span>
<span id="window">EP</span>
<span id="window">E</span>
<span id="window">OK/UP</span>
<span id="window">PAUZA</span>
<span id="window">BP</span>
<span id="window">BP</span>
</div>
<div id="row">
<span id="window">ST</span>
<span id="window">M</span>
<span id="window">EP</span>
<span id="window">Ú</span>
<span id="window">Ú</span>
<span id="window">NJ</span>
<span id="window">P</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
</div>
<div id="row">
<span id="window">ČT</span>
<span id="window">OK/UP</span>
<span id="window">OK/UP</span>
<span id="window">OV</span>
<span id="window">E</span>
<span id="window">AJ</span>
<span id="window">EP</span>
<span id="window">&nbsp;</span>
<span id="window">ICT</span>
<span id="window">ICT</span>
</div>
<div id="row">
<span id="window">PÁ</span>
<span id="window">ČJ</span>
<span id="window">NJ</span>
<span id="window">M</span>
<span id="window">P</span>
<span id="window">Ú</span>
<span id="window">AJ</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
<span id="window">&nbsp;</span>
</div>
<a href="<?php echo '?link=timetable&blind'?>">Zobrazit blind verzi</a>
<?php }
else
{
?>
<h2>Pondělí:</h2>
Účetnictví, Angličtina, Angličtina 
<h2>Úterý:</h2>
Čeština, Matematika, Němčina, Ekonomika, Ekonomie, Obchodní korespondence nebo účetní praxe, Přestávka, Bankovnictví, Bankovnictví
<h2>Středa:</h2>
Matematika, Ekonomika, Účetnictví, Účetnictví, Němčina, Právo
<h2>Čtvrtek:</h2>
Obcodní korespondence nebo účetní praxe, Obcodní korespondence nebo účetní praxe, Občanka, Ekonomie, Angličtina, Ekonomika, Počítače, Počítače
<h2>Pátek:</h2>
Čeština, Němčina, Matematika, Právo, Účetnictví, Angličtina
<br>
<a href="<?php echo '?link='.$_GET['link'];?>">Zobrazit normální verzi</a>
<?php }?>
