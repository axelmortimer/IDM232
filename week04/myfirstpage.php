<!DOCTYPE html>
<html>
<head>
	<title>My First</title>
</head>
<body>
	<h2>Complete Class List</h2>
	<a href="pageDuce.php?id=2&fname=jervo">Page 2 Link</a>
	<ol>
		<?php
			$names = array('Ben', 'Axel', 'Louise', 'Brendan', 'Kaitlyn', 'Kristen', 'Seamus', 'Khan', 'Su', 'Anisa', 'Deborah');
			for ($i = 0; $i < count($names); $i++) {
				echo "<li>" . $names{$i} . "</li>";
			}
		?>
	</ol>
	<h2>Even Number Only List</h2>
	<ul>
		<?php
			for ($i = 0; $i < count($names); $i++) {
				if ($i % 2 != 0) {
					echo "<li>" . $names{$i} . "</li>";
				}
			}
		?>
	</ul>
	<h2>Alphabetical Class List</h2>
	<ul>
		<?php
			$sortedNames = $names;
			sort($sortedNames);
			for ($i = 0; $i < count($sortedNames); $i++) {
				echo "<li>" . $sortedNames{$i} . "</li>";
			}
		?>
	</ul>
</body>
</html>