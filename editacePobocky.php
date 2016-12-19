<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }
      $vysledek = mysql_query("SELECT * FROM pobocky WHERE id = '$_GET[id]'") or die(mysql_error());
      ($zaznam = mysql_fetch_Array($vysledek));

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("UPDATE `pobocky` SET jmeno_pobocky = '$_POST[jmeno_pobocky]', adresa = '$_POST[adresa]', vedouci = '$_POST[vedouci]' WHERE id = '$_POST[id]'");
     header("Location:admin.php?s=pobocky");
   }              

?>


<article>

				<h3>Editace pobočky</h3>
				<fieldset>
					<form action="admin.php?s=editPobocka&a=proved" method="post">      
          <p><label for="jmeno_pobocky">Jméno pobočky:</label>
						<input type="text" name="jmeno_pobocky" id="jmeno_pobocky" value="<?php echo $zaznam['jmeno_pobocky']; ?>" /><br /></p>		
						<p><label for="adresa">Adresa:</label>
						<input type="text" name="adresa" id="adresa" value="<?php echo $zaznam['adresa']; ?>" /><br /></p>
						<p><label for="vedouci">Vedoucí:</label>
            <select name="vedouci">
            <?php
                  $vysledek = mysql_query("SELECT * FROM zamestnanci WHERE pozice = 'vedoucí'") or die(mysql_error());
                  while ($zaznam = mysql_fetch_Array($vysledek)):
            			echo '<option value="'.$zaznam["id"].'">'.$zaznam["jmeno"].'</option>';     		       
            			endwhile;      
            ?>
            </select>
            <input type="hidden" value="<?php echo "$_GET[id]"; ?>" name="id">
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>