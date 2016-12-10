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
			<h5 class="center-align">Vous possédez un code classe ?</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12">	
					<div class="row">
						<div class="input-field col s9">
							<input id="code" type="text" class="validate">
							<label for="code" data-error="wrong" data-success="right">Code</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" type="submit" name="action">Valider
								<i class="material-icons right">send</i>
							</button>
							<button class="btn waves-effect waves-light" type="submit" name="action">
								<a href="../controller/Controller_Page_Inscription_Externe.php">
									Je n'ai pas de code classe
								</a> 
								
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