<?php
require "connect.php";
?>
<?php 
      if(!isset($_GET['action']))
      {
      $_GET['action'] = '';
      }
      if(!isset($_GET['s']))
      {
      $_GET['s'] = '';
      }
      if(!isset($_POST['login']))
      {
      $_POST['login'] = '';
      }
       $login =  $_POST['login'];
       $vysledek = mysql_query("SELECT * FROM uzivatele WHERE login = '$login'") or die(mysql_error());
       $zaznam = mysql_fetch_Array($vysledek);
       
      if ($_GET['action']=='validate'){
      if(($_POST['login']==$zaznam['login'])&&(md5($_POST['heslo'])==$zaznam['heslo'])){
     session_start();
     header("Cache-control: private");
     $_SESSION["user_is_logged"] = 1;
     $_SESSION["login"] = $zaznam["login"];
     $_SESSION["role"] = $zaznam["role"];
     header("Location:admin.php");
     exit;
   }
 }              

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOVAMA - administační rozhraní</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="#">DOVAMA</a></h1>

				<h2>Přihlašte se prosím</h2>
				
			</header>			 
      			<nav id="mainnav">
            <ul>

                        	</ul>
			</nav>      
			</aside>
			<section id="content" class="column-right">
      <?php
       if ($_GET['s']=='logout'){
       echo '<h3> Byl jste úspěšně odhlášen.</h3>';
       }
      ?>
				<fieldset>

        
					<legend>Přihlašovací formulář</legend>
					<form action="index.php?action=validate" method="post">
						<p><label for="login">Login:</label>
						<input type="text" name="login" id="login" value="" /><br /></p>		
						<p><label for="heslo">Heslo:</label>
						<input type="password" name="heslo" id="heslo" value="" /><br /></p>
						<p><input type="submit" name="send" class="formbutton" value="Přihlásit se" /></p>
					</form>
	
				</fieldset>
        <table style="height: 500px;display: block;">
        </table>
        </article>


		</section>

		<div class="clear"></div>

	</section>
	

</body>
</html>
