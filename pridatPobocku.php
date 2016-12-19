<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("INSERT INTO `pobocky` (`id`, `jmeno_pobocky`, `adresa`, `vedouci`) VALUES (NULL, '$_POST[jmeno_pobocky]', '$_POST[adresa]', '$_POST[id]')");
     header("Location:admin.php?s=pobocky");
   }              

?>


<article>

				<h3>Přidat pobočku</h3>
				<fieldset>

					<form action="admin.php?s=addPobocka&a=proved" method="post">
						<p><label for="jmeno_pobocky">Jméno pobočky:</label>
						<input type="text" name="jmeno_pobocky" id="jmeno_pobocky" value="" /><br /></p>		
						<p><label for="adresa">Adresa:</label>
						<input type="text" name="adresa" id="adresa" value="" /><br /></p>
						<p><label for="vedouci">Vedoucí:</label>
            <select name="id">
            <?php
                  $vysledek = mysql_query("SELECT * FROM zamestnanci") or die(mysql_error());
                  while ($zaznam = mysql_fetch_Array($vysledek)):
            			echo '<option value="'.$zaznam["id"].'">'.$zaznam["jmeno"].'</option>';     		       
            			endwhile;      
            ?>
            </select>
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>