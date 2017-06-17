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

	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>