			<nav id="mainnav">
  				<ul>
                            		<li<?php if($_GET['s']==''){echo ' class="selected-item"';} ?>><a href="admin.php">Hlavní stránka</a></li>
                           		 <li<?php if($_GET['s']=='knihy'){echo ' class="selected-item"';}?>><a href="admin.php?s=knihy">Knihy</a></li>
                           		 <li><a href="admin.php?s=zamestanci">Zaměstnanci</a></li>
                            		<li><a href="admin.php?=pobocky">Pobočky</a></li>
                            		<li><a href="logout.php">Odhlášení</a></li>
                        	</ul>
			</nav>