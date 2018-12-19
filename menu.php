<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet" type="text/css" />
<head>

</head>
<body>

	<ul id="topmenu">


		<li><a href="index.php">Home</a> </li>
		<li><a href="history.php">Storia</a></li>
		<li><a href="contacts.php">Contatti</a></li>
		<li><a href="wines.php">Vini</a> </li>
		<li><a href="galleria.php">Galleria</a> </li>
<!--
		<li><a href="scaffale.php">Ordine</a></li>
-->
		<li><a href="commenta.php">Commenta</a></li>

		<a href="https://www.facebook.com/aziendafratellilolli.lolli" target='_blank'><img style="float: left" src="images/fb.png" /></a>
		
		<?php
		session_start();

		if(isset($_SESSION['articoli']) and sizeof($_SESSION['articoli']) > 0)
			echo "<li><a href=\"carrello.php\"><img src='images/carrelloMenu.png' alt=\"Visualizza Carrello\" /><font size=\"1\">".sizeof($_SESSION['articoli'])." prod. nel carrello</font></a></li>";
		if(isset($_SESSION['user']) and $_SESSION['user']=="admin"){
			echo "<li><a href=\"login.php\"><font color=\"RED\">Admin</font></a></li>";
			echo "<li><a href=\"logout.php\"><font color=\"RED\">LogOut</font></a></li>";
		}

		?>
	<!--<li><a href="shopVinit.php" target='_blank'>Ordine con Vinit</a></li>
	-->
	</ul>
	<div class="clear"></div>
	<h1 id="sitename"><a href="index.php">Azienda Agricola F.lli Lolli s.s.</a> 
	<!--<span class="description">AZIENDA AGRICOLA F.LLI LOLLI</span>-->
	</h1>
</div>
</body>
</html>