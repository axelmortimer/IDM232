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
				<li><a href="https://axelmortimer.com/about.html">About</a></li>
				<li><a href="#"><b>Portfolio</b></a></li>
				<li><a href="https://axelmortimer.com/playlists.html">Playlists</a></li>
				<li><a href="https://axelmortimer.com/contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main id="main-projects">

		<?php
			while ($row = mysqli_fetch_assoc($result)) {
				
				// Project Section
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
						echo '<a href="#" id="' . $row['tag-popup'] . '">';
							echo '<h3>VIEW</h3>';
						echo '</a>';
					echo '</div>';
				echo '</div>';

				// Project About Page/Pop-up
				echo '<div class="project-popup" id="' . $row['tag-popup-target'] . '">';
					echo '<div class="project-popup-back">';
						echo '<p>Back</p>';
					echo '</div>';
					echo '<div class="project-popup-background"></div>';
					echo '<div class="project-popup-window" id="' . $row['tag-popup-window'] . '">';
						echo '<div class="project-popup-window-header">';
							echo '<h2>' . $row['projectTitle'] . '</h2>';
						echo '</div>';
						echo '<div class="project-popup-window-info">';
							echo '<p>' . $row['tag-popup-description'] . '</p>';
						echo '</div>';
						echo '<div class="project-popup-window-links">';
							echo '<a href="#" class="project-popup-window-buttons">';
								echo '<h3>CASE STUDY</h3>';
							echo '</a>';
							echo '<a href="' . $row['link'] . '" class="project-popup-window-buttons">';
								echo '<h3>PROJECT LINK</h3>';
							echo '</a>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			}
		?>

	</main>

	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>