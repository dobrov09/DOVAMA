<?php
require 'connect.php';
require 'protection.php';
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

			<nav id="mainnav">
  				<ul>
                            		<li class="selected-item"><a href="index.html">Hlavní stránka</a></li>
                           		 <li><a href="#">Knihy</a></li>
                           		 <li><a href="#">Zaměstnanci</a></li>
                            		<li><a href="#">Pobočky</a></li>
                            		<li><a href="#">Odhlášení</a></li>
                        	</ul>
			</nav>

			
			
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h2>Vítejte v administačním rozhraní</h2>

		
		</article>
	
		<article class="expanded">


			
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in iaculis justo, in pellentesque sem. Suspendisse posuere ex erat, vel feugiat nunc aliquet a. Cras est purus, ultrices non consequat at, cursus non risus. Morbi mollis non augue eget venenatis. Nunc id mi posuere, consectetur ligula eget, volutpat lorem. Aliquam interdum tempor orci vitae ullamcorper. Praesent sed placerat urna. Donec vulputate convallis turpis, vitae sodales dolor hendrerit ac. Nulla nisi sapien, ultrices vitae orci in, mollis tempor eros. Mauris at semper felis. Cras sed ligula posuere, malesuada eros ut, feugiat tortor. Maecenas et aliquet enim. Etiam sagittis blandit libero, non mollis augue accumsan id. Quisque ullamcorper auctor sem vitae placerat. Nulla eu semper erat. Integer nisi erat, viverra vitae elit a, ultricies eleifend arcu.

Quisque ultrices hendrerit nisl, non malesuada turpis euismod non. Duis nulla sapien, vehicula id luctus malesuada, porta id risus. Suspendisse nec felis eu tellus placerat pellentesque eu eu nibh. Vivamus quam diam, tempus non ipsum id, sagittis pellentesque enim. Etiam in nunc id tellus mollis porttitor. Ut orci turpis, tempor ac sodales sit amet, porttitor id quam. In ut ex at nibh posuere eleifend. Quisque commodo porttitor massa nec porta. Aliquam sed leo lacus. Mauris ipsum orci, bibendum pellentesque facilisis vitae, pellentesque non nunc. Aliquam iaculis orci arcu, ac faucibus risus imperdiet vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ac mattis odio. Sed condimentum ex sed dignissim suscipit. Vivamus pellentesque pellentesque ligula id semper.</p>

		</article>


		</section>

		<div class="clear"></div>

	</section>
	

</body>
</html>
