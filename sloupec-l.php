<a>Třída</a><br>
<a href="./gallery">Fotogalerie</a><br>
<a href="?link=contacts">Kontakty</a><br>
Škola
<ul id="skola-seznam">
<li><a href="?link=homeworks">Domácí úkoly</a></li>
<li><a href="?link=notes">Výpisky</a></li>
<li><a href="?link=tests">Testy</a></li>
<li><a href="?link=timelists">Termínová listina</a></li>
<li><a href="?link=timetable">Rozvrh hodin</a></li>
<li>Suplování</li>
</ul>
<a href="http://goa.braillnet.cz">GOA</a><br>
<a href="http://goa.braillnet.cz:1080/ucebnice">E-učebnice</a><br>
<a href="https://aplikace.skolaonline.cz/SOL/Prihlaseni.aspx?ReturnUrl=%2fsol%2fApp%2fDefault.aspx">E-žákovská</a><br>
<a href="http://goa.braillnet.cz/nastenka">E-nástěnka</a><br>
<a href="http://videnohmatem.braillnet.cz">Viděno hmatem, o. s. </a><br>         
<a href="http://kdd.cz">KDD</a><br>
<a href="http://www.ktn.cz">KTN</a><br>
<a href="?link=administrace">Administrace</a>
<?php if($_COOKIE["user"] == "admin") {?>
<br>
<br>
<hr>
Administrace
<hr>
<br>

<a href="?admin=homeworks">Domácí úkoly</a><br>
Výpisky<br>
Testy<br>
Suplování
<br>
<br>
<a href="index.php?action=logout">Odhlásit</a>
<?php }?>
