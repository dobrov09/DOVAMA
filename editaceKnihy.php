<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }
      $vysledek = mysql_query("SELECT * FROM knihy WHERE id = '$_GET[id]'") or die(mysql_error());
      ($zaznam = mysql_fetch_Array($vysledek));

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("UPDATE `knihy` SET nazev = '$_POST[nazev]', autor = '$_POST[autor]', pocet = '$_POST[pocet]' WHERE id = '$_POST[id]'");
     header("Location:admin.php?s=knihy");
   }              

?>


<article>

				<h3>Editovat knihu</h3>
				<fieldset>
					<form action="admin.php?s=editKniha&a=proved" method="post">
						<p><label for="nazev">Název:</label>
						<input type="text" name="nazev" id="nazev" value="<?php echo $zaznam['nazev']; ?>" /><br /></p>		
						<p><label for="autor">Autor:</label>
						<input type="text" name="autor" id="autor" value="<?php echo $zaznam['autor']; ?>" /><br /></p>
						<p><label for="pocet">Počet kusů:</label>
						<input type="text" name="pocet" id="pocet" value="<?php echo $zaznam['pocet']; ?>" /><br /></p>
            <input type="hidden" value="<?php echo "$_GET[id]"; ?>" name="id">
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>