<article>
<h3>Seznam uživatelů</h3>
<?php
if($_SESSION["role"]=='2' || $_SESSION["role"]=='3' || $_SESSION["role"]=='4'){
echo '<a href="admin.php?s=addUzivatel"><img src="./img/pridat.png"></a>';
echo '<br><br>';

}

 
?>

<?php 
      if(!isset($_GET['a']))
      {
      $_GET['a'] = '';
      }
      if(!isset($_GET['id']))
      {
      $_GET['id'] = '';
      }

       
      if ($_GET['a']=='smaz'){
     $zaznam = mysql_query("DELETE FROM uzivalte WHERE id = '$_GET[id]'");
     header("Location:admin.php?s=uzivatele");
   }              

?>
				<table>
					<tr>
          <?php
          echo '<th>ID</th>';
          echo '<th>Login</th>';
          echo '<th>Heslo</th>';
          echo '<th>Role</th>';
          echo '<th>Smazat</th>';
          echo '<th>Editovat</th>';
          ?>
					</tr>
                <?php
             $vysledek = mysql_query("SELECT * FROM uzivatele") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
			echo '<td>'.$zaznam["id"].'</td>';
      echo '<td>'.$zaznam["login"].'</td>';
      echo '<td>'.$zaznam["heslo"].'</td>';
      echo '<td>'.$zaznam["role"].'</td>';
      echo '<td><a href="admin.php?s=uzivatele&a=smaz&id='.$zaznam["id"].'"><img src="./img/smazat.png"></td></a>';
      echo '<td><a href="admin.php?s=editUzivatel&id='.$zaznam["id"].'"><img src="./img/editovat.png"></td>';
      echo "</tr>";
			endwhile;
      

      
      ?>
	
				</table>
</article>