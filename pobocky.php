                                                                             <article>
<h3>Seznam poboček</h3>
<?php
if($_SESSION["role"]=='3' || $_SESSION["role"]=='4'){
echo '<a href="admin.php?s=addPobocka"><img src="./img/pridat.png"></a>';
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
     $zaznam = mysql_query("DELETE FROM pobocky WHERE id = '$_GET[id]'");
     header("Location:admin.php?s=pobocky");
   }              

?>
				<table>
					<tr>
          <?php
          if($_SESSION["role"]=='1' || $_SESSION["role"]=='2'){
          echo '<th>Jméno</th>';
          echo '<th>Adresa</th>';
          echo '<th>Vedoucí</th>';
          }
          else{
          echo '<th>Název</th>';
          echo '<th>Adresa</th>';
          echo '<th>Vedoucí</th>';
          echo '<th>Smazat</th>';
          echo '<th>Editovat</th>';
          }
          ?>
					</tr>
                <?php
        if($_SESSION["role"]=='1' || $_SESSION["role"]=='2'){
       $vysledek = mysql_query("SELECT *, (zamestnanci.jmeno) AS vedouci FROM pobocky, zamestnanci WHERE pobocky.vedouci = zamestnanci.id") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
      echo '<td>'.$zaznam["jmeno_pobocky"].'</td>';
      echo '<td>'.$zaznam["adresa"].'</td>';
      echo '<td>'.$zaznam["vedouci"].'</td>';
      echo "</tr>";
			endwhile;
      }
      else
      {
              $vysledek = mysql_query("SELECT *, (zamestnanci.jmeno) AS vedouci, (pobocky.id) AS id_pobocky FROM pobocky, zamestnanci WHERE pobocky.vedouci = zamestnanci.id") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
      echo '<td>'.$zaznam["jmeno_pobocky"].'</td>';
      echo '<td>'.$zaznam["adresa"].'</td>';
      echo '<td>'.$zaznam["vedouci"].'</td>';
      echo '<td><a href="admin.php?s=pobocky&a=smaz&id='.$zaznam["id_pobocky"].'"><img src="./img/smazat.png"></td></a>';
      echo '<td><a href="admin.php?s=editPobocka&id='.$zaznam["id_pobocky"].'"><img src="./img/editovat.png"></td>';
      echo "</tr>";
			endwhile;
      }

      
      ?>
	
				</table>
</article>