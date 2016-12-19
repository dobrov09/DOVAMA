
<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("INSERT INTO `zamestnanci` (`id`, `jmeno`, `pobocka`, `pozice`) VALUES (NULL, '$_POST[jmeno]', '$_POST[pobocka]', '$_POST[pozice]');");
     header("Location:admin.php?s=zamestnanci");
   }              

?>


<article>

				<h3>Přidat zaměstnance</h3>
				<fieldset>
					<form action="admin.php?s=addZamestnanec&a=proved" method="post">      
          <p><label for="jmeno">Jméno:</label>
						<input type="text" name="jmeno" id="jmeno" value="" /><br /></p>		
						<p><label for="pobocka">Pobočka:</label></p>
            <p><select name="pobocka">
                  <?php
                  $vysledek = mysql_query("SELECT * FROM pobocky") or die(mysql_error());
                  while ($zaznam = mysql_fetch_Array($vysledek)):
            			echo '<option value="'.$zaznam["id"].'">'.$zaznam["jmeno_pobocky"].'</option>';     		       
            			endwhile;      
            ?>
            </select></p>
            <p><label for="pozice">Pozice:</label></p>
            <p><select name="pozice">
            <option value="správce">správce</option>
            <option value="majitel">majitel</option>
            <option value="pokladní">pokladní</option>
            <option value="vedoucí">vedoucí</option>
            <option value="podpora">podpora</option>		       
            </select></p>
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>
