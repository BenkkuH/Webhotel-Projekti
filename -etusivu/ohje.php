<!DOCTYPE html>
<?php
    require_once ("tietokanta.php");
?>
<html lang="fi">
	<head>
		<meta charset="UTF-8">
		<title>Ohje</title>
		<link rel="stylesheet" type="text/css" href="tyyli.css">
		<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
		<style>
		
		</style>
			
	</head>
		
	<body>
		
		<div id="sailio">
			
			<header>
				<div id="otsikko">
					<a href="index.php"><h1>Oy Webhotelli Ab</h1></a>
				</div>
			</header>
			
			<main>
				<article>
					<h2>Ohjeen otsikko</h2>
                	<p>Luotu [pvm] || Kalle Kirjoittaja (rooli)</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                         nisi ut aliquip ex ea commodo consequat. 
                         Duis aute irure dolor in reprehenderit in voluptate 
                         velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, 
                         sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </article>
				<div id="ohjesailio">
					<h3>Uusimmat ohjeet</h3>
					<nav id="linkit">
						<ul>
							<li><a class="linkki" href="ohje.html">Ohje 1 </a></li>
							<li><a class="linkki" href="ohje.html">Ohje 2 </a></li>
							<li><a class="linkki" href="ohje.html">Ohje 3 </a></li>
							<li><a class="linkki" href="ohje.html">Ohje 4 </a></li>
							<li><a class="linkki" href="ohje.html">Ohje 5 </a></li>
							<li><a class="linkki" href="ohje.html">Ohje 6 </a></li>
				        </ul>
					</nav>
				</div>
			</main>
			<footer>
				<div class="footer_sisalto">
					<div class="footer_infot">
						<div class="aspa_info">
							<p><b>Asiakaspalvelu</b><br>
							tuki@webhotelli.fi<br>
							puh. 01234567<br>
							Arkisin klo 9-16</p>
						</div>
						<div class="myynti_info">
							<p><b>Myynti</b><br>
							myynti@webhotelli.fi<br>
							puh. 01234567<br>
							Arkisin klo 9-16</p>
						</div>
					</div>
					<div class="some">
						<p><b>Sosiaalinen media</b></p>
						<ul class="somekuvake_sailio">
							<li class="facebook_link">
								<a href="https://www.facebook.com/"><img alt="Facebook" src="icon_facebook48px.png" title="Facebook"</a>
							</li>
							<li class="linkedin_link">
								<a href="https://www.linkedin.com/?trk=seo-authwall-base_nav-header-logo"><img alt="Linkedin" src="icon_linkedin48px.png" title="Linkedin"</a>
							</li>
							<li class="twitter_link">
								<a href="https://twitter.com/"><img alt="Twitter" src="icon_twitter48px.png" title="Twitter"</a>
							</li>
						</ul>
					</div>
				</div>
			</footer>		
		</div>	
	</body>
</html>