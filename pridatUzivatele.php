<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }

       
      if ($_GET['a']=='proved'){
      $heslo_db = md5($_POST[heslo]);
     $zaznam = mysql_query("INSERT INTO `uzivatele` (`id`, `login`, `heslo`, `role`) VALUES (NULL, '$_POST[login]', '$heslo_db', '$_POST[role]')");
     header("Location:admin.php?s=uzivatele");
   }              

?>


<article>

				<h3>Přidat uživatele</h3>
				<fieldset>

					<form action="admin.php?s=addUzivatel&a=proved" method="post">
						<p><label for="login">Login:</label>
						<input type="text" name="login" id="login" value="" /><br /></p>		
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
					</form>
	
				</fieldset>

</article>