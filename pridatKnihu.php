
<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }

       
      if ($_GET['a']=='proved'){
     $zaznam = mysql_query("INSERT INTO `knihy` (`id`, `nazev`, `autor`, `pocet`) VALUES (NULL, '$_POST[nazev]', '$_POST[autor]', '$_POST[pocet]')");
     header("Location:admin.php?s=knihy");
   }              

?>


<article>

				<h3>Přidat knihu</h3>
				<fieldset>

					<form action="admin.php?s=addKniha&a=proved" method="post">
						<p><label for="nazev">Název:</label>
						<input type="text" name="nazev" id="nazev" value="" /><br /></p>		
						<p><label for="autor">Autor:</label>
						<input type="text" name="autor" id="autor" value="" /><br /></p>
						<p><label for="pocet">Počet kusů:</label>
						<input type="text" name="pocet" id="pocet" value="" /><br /></p>
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
					</form>
	
				</fieldset>

</article>
