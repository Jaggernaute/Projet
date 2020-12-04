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
			<form method="get" action="/contact_core.php">
				<label for="fname">Prenom:</label><br>
				<input type="text" id="fname" name="fname" placeholder="votre prenom.."><br>
				<label for="lname">Nom:</label><br>
				<input type="text" id="lname" name="lname" placeholder="votre nom.."><br>
				<label for="mail">e-mail:</label><br>
				<input type="text" id="mail" name="mail" placeholder="votre mail.."><br>
				<label for="adr">Adresse:</label><br>
				<input type="text" id="adr" name="adr" placeholder="votre adresse.."><br>
				<label for="tel">Telephone:</label><br>
				<input type="text" id="tel" name="tel" placeholder="votre numero de telephone.."><br>

				<textarea name="message" placeholder="votre message" rows="10" cols="30">
   </textarea>
   <button type="button" class="button" onclick="alert('votre message a bien été envoyé !')">envoyer</button>
			</form>
		</main>

		<aside>
			<?php include('php/include/asside.php'); ?>
		</aside>
	</div>

	<footer>
		<ul>
			<li> -adresse: <strong> -66 route de la foret 12345 Clairiére </strong> </li>
			<li> -Mail: <strong> -labuche@caennvoiedubois.fr </strong> </li>
			<li> -tel: <strong> -555-0001</strong> </li>
	</footer>

</body>

</html>