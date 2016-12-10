<!doctype html>
<html lang="fr">
	<head>
		<title></title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Acueil du test Riasec">
		<meta name="Keywords" content="">
		<meta name="Subject" content="">
		<meta name="Copyright" content="">
		<meta name="Author" content="Groupe K Piscine">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<?php include ("../css/css_config.php") ?>
	</head>
	<body>
		
		
		
		<div class="container">
			<h5 class="center-align">Inscription Polytech</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s9">
							<input id="name" type="text" class="validate">
							<label for="name" data-error="wrong" data-success="right">Nom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<input id="firstname" type="text" class="validate">
							<label for="firstname" data-error="wrong" data-success="right">Prénom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<input id="sexe" type="text" class="validate">
							<label for="sexe" data-error="wrong" data-success="right">Sexe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<input id="password" type="password" class="validate">
							<label for="password" data-error="wrong" data-success="right">Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" type="submit" name="action">Inscription
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		
	</body>
</html>
<script src="jQuery.js"></script>
<script src="materialize/js/materialize.js"></script>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>