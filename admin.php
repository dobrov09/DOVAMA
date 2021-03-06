<?php
require 'connect.php';
require 'protection.php';
      if(!isset($_GET['s']))
      {
      $_GET['s'] = '';
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

				<h2>Přihlášen jako <?php echo $_SESSION["login"]; ?></h2>
				
			</header>

<?php include "menu.php"; ?>

			
			
			</aside>
			<section id="content" class="column-right">
      
          <?php
    switch($_GET['s']) {
    case false :
        include "default.php";
    break;
    case 'knihy' :
        include "knihy.php";
    break;
    case 'zamestnanci' :
        include "zamestnanci.php";
    break;
    case 'pobocky' :
        include "pobocky.php";
    break;
    case 'addKniha' :
        include "pridatKnihu.php";
    break;
    case 'editKniha' :
        include "editaceKnihy.php";
    break;
    case 'addPobocka' :
        include "pridatPobocku.php";
    break;
    case 'editPobocka' :
        include "editacePobocky.php";
    break;  
    case 'editZamestnanec' :
        include "editaceZamestnance.php";
    break;
    case 'addZamestnanec' :
        include "pridatZamestnance.php";
    break;
    case 'uzivatele' :
        include "uzivatele.php";
    break;
    case 'addUzivatel' :
        include "pridatUzivatele.php";
    break;
    case 'editUzivatel' :
        include "editaceUzivatele.php";
    break;     
    }
      ?>
                	

    <table style="height: 500px;display: block;"></table>
		</section>


		<div class="clear"></div>

	</section>
	

</body>
</html>
