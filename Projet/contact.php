<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<form action="/action_page.php">
  <label for="fname">Prenom:</label><br>
  <input type="text" id="fname" name="fname" placeholder="votre prenom.."><br>
  <label for="lname">Nom:</label><br>
  <input type="text" id="lname" name="lname" placeholder="votre nom.."><br>
  <label for="mail">e-mail:</label><br>
  <input type="text" id="lname" name="lname" placeholder="votre nom.."><br>
  <label for="lname">Adresse:</label><br>
  <input type="text" id="adr" name="adr" placeholder="votre adresse.."><br>
  <label for="lname">Telephone:</label><br>
  <input type="text" id="tel" name="tel" placeholder="votre numero de tlephone.."><br>

  <textarea name="message" placeholder="votre message" rows="10" cols="30">
   </textarea>
  </form>
  <button type="button" class="button" onclick="alert('votre message a bien été envoyé !')">envoyer</button>
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