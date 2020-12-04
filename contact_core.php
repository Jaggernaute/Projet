<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/script.js"></script>
	<title>Contact</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<?php include('php/include/header.php'); ?>
	</header>
	<div class="coter">
		<nav>
			<?php include('php/include/nav.php'); ?>
		</nav>

		<main>
            <?php
				$fname = $_GET['fname'];
				$lname = $_GET['lname'];
				$mail = $_GET['mail'];
				$adr = $_GET['adr'];
				$tel = $_GET['tel'];

				echo $fname;
            ?>
		</main>

		<aside>
			<?php include('php/include/asside.php'); ?>
		</aside>
	</div>

	<footer>
		<ul>
			<li> -adresse: </li>
			<li> -Mail: </li>
			<li> -tel: </li>
	</footer>

</body>

</html>