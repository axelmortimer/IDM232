<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
  	<title>Portfolio - Axel Mortimer</title>
  	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  	<link rel="stylesheet" href="css/normalize.css">
 	<link rel="stylesheet" href="css/master.css">
 	<script
  		src="https://code.jquery.com/jquery-3.1.1.min.js"
  		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  		crossorigin="anonymous">
  	</script>
</head>
<body>
	<header>
		<div class="name">
			<a href="index.php">Axel Mortimer</a>
		</div>
		<nav>
			<div id="hamburger">
				<img id="menu-icon" src="media/menu.svg" alt="menu-icon">
			</div>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#"><b>Portfolio</b></a></li>
				<li><a href="#">Playlists</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main id="main-projects">

		<?php
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="project" id="' . $row['tag'] . '">';
					echo '<h1>' . $row['projectTitle'] . '</h1>';
					echo '<div class="project-images">';
						echo '<picture>';
							echo '<source media="(min-width: 50rem)" srcset="' . $row['courseImageSmall'] . '">';
							echo '<img src="' . $row['courseImageLarge'] . '" alt="' . $row['projectTitle'] . '">';
						echo '</picture>';
					echo '</div>';
					echo '<div class="project-info-bar">';
						echo '<div class="project-info">';
							echo '<p>' . $row['description'] . '</p>';
						echo '</div>';
						echo '<a href="' . rawurldecode($row['link']) . '">';
							echo '<h3>VIEW</h3>';
						echo '</a>';
					echo '</div>';
				echo '</div>';
			}
		?>

	</main>

	<!-- <main id="main-projects">
		<div class="project" id="gvb-redesign">
			<h1>GORILLA VS. BEAR REDESIGN</h1>
			<div class="project-images">
				<picture>
					<source media="(min-width: 50rem)" srcset="media/gvb-large.jpg">
					<img src="media/gvb-small.jpg" alt="Gorilla Vs. Bear Screenshot">
				</picture>
			</div>
			<div class="project-info-bar">
				<div class="project-info">
					<p>Updating a music news site desperately in need of a responsive makeover.</p>
				</div>
				<a href="https://preview.uxpin.com/23d68bb08681c7466f13bd92cedb51b806bede75#/pages/67307022">
					<h3>VIEW</h3>
				</a>
			</div>
		</div>
		<div class="project" id="gplaymusic">
			<h1>GOOGLE PLAY MUSIC DESKTOP REDESIGN</h1>
			<div class="project-images">
				<picture>
					<source media="(min-width: 50rem)" srcset="media/gpm-large.jpg">
					<img src="media/gpm-small.jpg" alt="Google Play Music Screenshot">
				</picture>
			</div>
			<div class="project-info-bar">
				<div class="project-info">
					<p>Prioritizing what matters most to music listeners.</p>
				</div>
				<a href="https://invis.io/PZ9ILXPEF">
					<h3>VIEW</h3>
				</a>
			</div>
		</div>
		<div class="project" id="jimmysapp">
			<h1>FOOD TRUCK APP</h1>
			<div class="project-images">
				<picture>
					<source media="(min-width: 50rem)" srcset="media/foodapp-large.jpg">
					<img src="media/foodapp-small.jpg" alt="Google Play Music Screenshot">
				</picture>
			</div>
			<div class="project-info-bar">
				<div class="project-info">
					<p>Enhancing the user experience of a Drexel favorite.</p>
				</div>
				<a href="#">
					<h3>VIEW</h3>
				</a>
			</div>
		</div>
	</main> -->
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>