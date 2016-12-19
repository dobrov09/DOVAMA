<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }
      $vysledek = mysql_query("SELECT *, (pobocky.jmeno_pobocky) AS jmenoPobocky, (pobocky.id) AS idPobocky FROM zamestnanci, pobocky WHERE zamestnanci.id = '$_GET[id]' AND zamestnanci.pobocka = pobocky.id") or die(mysql_error());
      ($zaznam = mysql_fetch_Array($vysledek));

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("UPDATE `zamestnanci` SET jmeno = '$_POST[jmeno]', pobocka = '$_POST[pobocka]', pozice = '$_POST[pozice]' WHERE id = '$_POST[id]'");
     header("Location:admin.php?s=zamestnanci");
   }              

?>


<article>

				<h3>Editovat zaměstnance</h3>
				<fieldset>
					<form action="admin.php?s=editZamestnanec&a=proved" method="post">      
          <p><label for="jmeno">Jméno</label>
						<input type="text" name="jmeno" id="jmeno" value="<?php echo $zaznam['jmeno']; ?>" /><br /></p>		
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
            <input type="hidden" value="<?php echo "$_GET[id]"; ?>" name="id">
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>