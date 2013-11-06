<h1>Změny v rozvrhu hodin</h1>
<div id="nadpisy">
<span>Hodina</span>
<span>Akce</span>
<?php if($_POST['akce'] == 1) {echo "<span>Na</span>";} ?>
</div>
<div id="nabidky">
<form method="POST">
<select name="z">
<option value="1"<?php echo $_POST['z'] == '1' ? ' selected="selected"' : ''; ?>>1</option>
<option value="2"<?php echo $_POST['z'] == '2' ? ' selected="selected"' : ''; ?>>2</option>
<option value="3"<?php echo $_POST['z'] == '3' ? ' selected="selected"' : ''; ?>>3</option>
<option value="4"<?php echo $_POST['z'] == '4' ? ' selected="selected"' : ''; ?>>4</option>
<option value="5"<?php echo $_POST['z'] == '5' ? ' selected="selected"' : ''; ?>>5</option>
<option value="6" <?php echo $_POST['z'] == '6' ? ' selected="selected"' : ''; ?>>6</option>
<option value="8" <?php echo $_POST['z'] == '7' ? ' selected="selected"' : ''; ?>>8</option>
<option value="9"<?php echo $_POST['z'] == '9' ? ' selected="selected"' : ''; ?>>9</option>
</select>
<select name="akce" onChange="this.form.submit()">
<option value='0'>Akce</option>
<option value="1"<?php echo $_POST['akce'] == '1' ? ' selected="selected"' : ''; ?>>Přesunout</option>
<option value="2"<?php echo $_POST['akce'] == '2' ? ' selected="selected"' : '';?>>Odpadá</option>
<option value="3"<?php echo $_POST['akce'] == '3' ? 'selected="selected"' : ''; ?>>Jiný předmět</option>
</select>
<?php 
if($_POST['akce'] == 0)
{echo "";}
elseif($_POST['akce'] == 1)
{
echo" 
<select name='na'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='8'>8</option>
<option value='9'>9</option>
</select>";
}
elseif($_POST['akce'] == 3)
{
echo "
<select name='subject'>
<option value='1'>Ekonomika</option>
<option value='2'>Občanská výchova</option>
<option value='3'>Angličtina</option>
<option value='4'>Matematika</option>
<option value='5'>Němčina</option>
<option value='6'>Čeština</option>
<option value='7'>Biologie</option>
<option value='8'>Ekologie</option>
<option value='9'>Zeměpis</option>
<option value='10'>Obchodní korespondence&nbsp;</option>
<option value='11'>Informační technologie&nbsp;</option>
<option value='12'>Dějepis</option>
<option value='13'>Chemie</option>
<option value='14'>Fyzika</option>
</select>
";
}
?>
<input type="submit">
</form>
</div>