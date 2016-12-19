<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }
      $vysledek = mysql_query("SELECT * FROM uzivatele WHERE id = '$_GET[id]'") or die(mysql_error());
      ($zaznam = mysql_fetch_Array($vysledek));

       
      if ($_GET['a']=='proved'){   
      $heslo_db = md5($_POST["heslo"]);
     $zaznam = mysql_query("UPDATE `uzivatele` SET login = '$_POST[login]', heslo = '$heslo_db', role = '$_POST[role]' WHERE id = '$_POST[id]'");
     header("Location:admin.php?s=uzivatele");
   }              

?>


<article>

				<h3>Editovat uživatele</h3>
				<fieldset>
					<form action="admin.php?s=editUzivatel&a=proved" method="post">
          <p><label for="login">Login:</label>
						<input type="text" name="login" id="login" value="<?php echo $zaznam['login']; ?>" /><br /></p>		
						<p><label for="heslo">Heslo:</label>
						<input type="password" name="heslo" id="heslo" value="" /><br /></p>
						<p><label for="role">Role:</label>
            <select name="role">
            <option value="1">zákazník</option>
            <option value="2">zaměstnanec</option>
            <option value="3">majitel</option>
            <option value="4">admin</option>
            </select>
						<p><input type="submit" name="send" class="formbutton" value="Odeslat" /></p>
            <input type="hidden" value="<?php echo "$_GET[id]"; ?>" name="id">
					</form>
	
				</fieldset>

</article>