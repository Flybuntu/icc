<?php
$ser = $_SERVER['REQUEST_URI'];
$cur_site = '';

// ovo sluzi za provjeru tako da znamo na kojem smo sajtu
if(strpos($ser, 'index.php'))
{
	$cur_site = 'home';
}
elseif(strpos($ser, 'catering.php'))
{
	$cur_site = 'catering';
}
elseif(strpos($ser, 'ciscenje.php'))
{
	$cur_site = 'ciscenje';
}
elseif(strpos($ser, 'kontakt.php'))
{
	$cur_site = 'kontakt';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>ICC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0 maximum-scale=1.0, user-scalable = no">
	<link rel="stylesheet" href="style.css">

</head>
<header>

<div id="wrap">

	<nav>
		<!-- ICC LOGO -->
			<img id="iccLogo" src="images/icc_logo.png">
			<div id="telBroj">
				<a href=""><img id="tel" src="vektori/telefon.png"><div id="broj">01/6202-433</div></a>
			</div>
	<div class="cisti" id="telCisti"></div>

		<!-- Nav Linkovi -->


 			<div id="navLinkovi">
			<ul id="navBar" class="nevidi">
				<li 
				<?php
					if($cur_site == "home" || $cur_site == "") echo "class=aktivna";
				?>
				><a href="index.php">Naslovnica</a></li>
				<li 
				<?php
					if($cur_site == "catering") echo "class=aktivna";
				?>
				><a href="catering.php">Catering</a></li>
				<li 
				<?php
					if($cur_site == "ciscenje") echo "class=aktivna";
				?>
				><a href="ciscenje.php">Čišćenje</a></li>
				<li><a href="https://icc3d.weebly.com/">ICC 3D</a></li>
				<li 
				<?php
					if($cur_site == "kontakt") echo "class=aktivna";
				?>
				><a href="kontakt.php">Kontakt</a></li>
			</ul>
			<div id="menuBar" class="handle vidi">Menu</div>
		</div>


	</nav>

</div>
	<script type="text/javascript">

		/* Skrivanje i pokazivanje menu bar za mobile responsive*/
		var ele = document.getElementById("navBar");
		document.getElementById("menuBar").onclick = function() {
			if(ele.classList.contains("nevidi")) {
				ele.classList.toggle("vidi");
				ele.classList.remove("nevidi");
			} else if(ele.classList.contains("vidi")){
				ele.classList.remove("vidi");
				ele.classList.add("nevidi");
			}	


		}
		
	</script>
</header>
<body>