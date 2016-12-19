                                                                             <article>
<h3>Seznam zaměstnanců</h3>
<?php
if($_SESSION["role"]=='3' || $_SESSION["role"]=='4'){
echo '<a href="admin.php?s=addZamestnanec"><img src="./img/pridat.png"></a>';
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
     $zaznam = mysql_query("DELETE FROM zamestnanci WHERE id = '$_GET[id]'");
     header("Location:admin.php?s=zamestnanci");
   }              

?>
				<table>
					<tr>
          <?php
          if($_SESSION["role"]=='1' || $_SESSION["role"]=='2'){
          }
          else{
          echo '<th>Jméno</th>';
          echo '<th>Pobočka</th>';
          echo '<th>Pozice</th>';
          echo '<th>Smazat</th>';
          echo '<th>Editovat</th>';
          }
          ?>
					</tr>
                <?php
        if($_SESSION["role"]=='1' || $_SESSION["role"]=='2'){
        echo 'Nemáte opravnění prohlížet tuto sekci.';
      }
      else
      {
              $vysledek = mysql_query("SELECT *, (pobocky.jmeno_pobocky) AS jmenoPobocky, (zamestnanci.id) AS id_zamestnance FROM pobocky, zamestnanci WHERE zamestnanci.pobocka = pobocky.id") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
      echo '<td>'.$zaznam["jmeno"].'</td>';
      echo '<td>'.$zaznam["jmenoPobocky"].'</td>';
      echo '<td>'.$zaznam["pozice"].'</td>';
      echo '<td><a href="admin.php?s=zamestnanci&a=smaz&id='.$zaznam["id_zamestnance"].'"><img src="./img/smazat.png"></td></a>';
      echo '<td><a href="admin.php?s=editZamestnanec&id='.$zaznam["id_zamestnance"].'"><img src="./img/editovat.png"></td>';
      echo "</tr>";
			endwhile;
      }

      
      ?>
	
				</table>
</article>