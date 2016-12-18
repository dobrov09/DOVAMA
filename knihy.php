<article>
<h3>Seznam knih</h3>
<?php
if($_SESSION["role"]=='2' || $_SESSION["role"]=='3' || $_SESSION["role"]=='4'){
echo '<a href="admin.php?s=addKniha"><img src="./img/pridat.png"></a>';
echo '<br><br>';

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
      echo '<td><img src="./img/smazat.png"></td>';
      echo '<td><img src="./img/editovat.png"></td>';
      echo "</tr>";
			endwhile;
      }

      
      ?>
	
				</table>
</article>