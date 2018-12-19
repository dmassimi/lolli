<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Azienda Agricola F.lli Lolli</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php	
session_start();

$pagina="history";

if(isset($_SESSION['lingua']) )
	$lingua=$_SESSION['lingua'];
else
	$lingua="italiano";
?>
	
<body>
	<div id="wrap">
		<div id="header">
		<?php include 'menu.php'; ?>
			<div id="content">
				<div id="sidebar">
						<h2><img src="images/botti.jpg" alt="F.LLI Lolli" /></h2>
				</div>
				<div id="left">
					<div id="tab">
						<div id="tabcontent">
							<h3>
								<?php	
								$contenuti=simplexml_load_file("contenuti.properties");
								echo $contenuti->contenuti->$lingua->$pagina->titolo;
								?>
							</h3>
							<img class="leftimg" src="images/storia.jpg" alt="F.LLI Lolli" />
							<p>
								<?php									
								echo $contenuti->contenuti->$lingua->$pagina->testo;
								?>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<?php include 'footer.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
