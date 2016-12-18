<article>
<h3>Seznam knih</h3>
<?php
if($_SESSION["role"]=='2' || $_SESSION["role"]=='3' || $_SESSION["role"]=='4'){
echo '<a href="admin.php?s=addKniha"><img src="./img/pridat.png"></a>';
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
     $zaznam = mysql_query("DELETE FROM knihy WHERE id = '$_GET[id]'");
     header("Location:admin.php?s=knihy");
   }              

?>
				<table>
					<tr>
          <?php
          if($_SESSION["role"]=='1'){
          echo '<th>ID</th>';
          echo '<th>Název knihy</th>';
          echo '<th>Autor</th>';
          echo '<th>Počet kusů</th>';
          }
          else{
          echo '<th>ID</th>';
          echo '<th>Název knihy</th>';
          echo '<th>Autor</th>';
          echo '<th>Počet kusů</th>';
          echo '<th>Smazat</th>';
          echo '<th>Editovat</th>';
          }
          ?>
					</tr>
                <?php
        if($_SESSION["role"]=='1'){
       $vysledek = mysql_query("SELECT * FROM knihy") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
			echo '<td>'.$zaznam["id"].'</td>';
      echo '<td>'.$zaznam["nazev"].'</td>';
      echo '<td>'.$zaznam["autor"].'</td>';
      echo '<td>'.$zaznam["pocet"].'</td>';
      echo "</tr>";
			endwhile;
      }
      else
      {
             $vysledek = mysql_query("SELECT * FROM knihy") or die(mysql_error());
      while ($zaznam = mysql_fetch_Array($vysledek)):
			echo '<tr>';     		       
			echo '<td>'.$zaznam["id"].'</td>';
      echo '<td>'.$zaznam["nazev"].'</td>';
      echo '<td>'.$zaznam["autor"].'</td>';
      echo '<td>'.$zaznam["pocet"].'</td>';
      echo '<td><a href="admin.php?s=knihy&a=smaz&id='.$zaznam["id"].'"><img src="./img/smazat.png"></td></a>';
      echo '<td><img src="./img/editovat.png"></td>';
      echo "</tr>";
			endwhile;
      }

      
      ?>
	
				</table>
</article>