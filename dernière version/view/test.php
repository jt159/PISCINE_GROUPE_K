<!doctype html>
<html lang="fr">
  <head>
    <title></title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Accueil du test Riasec">
    <meta name="Keywords" content="">
    <meta name="Subject" content="">
    <meta name="Copyright" content="">
    <meta name="Author" content="Groupe K Piscine">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<?php include ("../css/css_config.php") ?>

  </head>
	<body>
		<nav>
			<div class="nav-wrapper">
				<a href="" class="brand-logo right">Test Riasec</a>
				<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a href="test.html">Faire le test</a></li>
					<li><a href="">Reprendre le test</a></li>
					<li><a href="">Administrateur</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a class="waves-effect waves-light btn" href="test.html">Faire le test</a></li>
					<li><a class="waves-effect waves-light btn" href="">Reprendre le test</a></li>
					<li><a class="waves-effect waves-light btn" href="">Administrateur</a></li>
				</ul>
			</div>
		</nav>
		<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
		})
		</script>
		<br>
		<div class="container">
			<h4>Groupe 4</h4>
			<br>
			<form action="#">
				<table class="striped bordered">
					<thead>
						<tr>
							<th>Propositions</th>
							<th>1°</th>
							<th>2°</th>
							<th>3°</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alvin djjjdekzod udh uefhe hfeuhjf</td>
							<td><input name="group1" class="prop1" type="radio" id="1"/><label for="1"></label></td>
							<td><input name="group2" class="prop1" type="radio" id="2"/><label for="2"></label></td>
							<td><input name="group3" class="prop1" type="radio" id="3"/><label for="3"></label></td>
						</tr>
						<tr>
							<td>Alan czkjozjif i fhiz jioafjz ifzh jfzio</td>
							<td><input name="group1" class="prop2" type="radio" id="4"/><label for="4"></label></td>
							<td><input name="group2" class="prop2" type="radio" id="5"/><label for="5"></label></td>
							<td><input name="group3" class="prop2" type="radio" id="6"/><label for="6"></label></td>
						</tr>
						<tr>
							<td>Jonathan dzjnkzdn izdjiezjd izhudazh efzuihefzu</td>
							<td><input name="group1" class="prop3" type="radio" id="7"/><label for="7"></label></td>
							<td><input name="group2" class="prop3" type="radio" id="8"/><label for="8"></label></td>
							<td><input name="group3" class="prop3" type="radio" id="9"/><label for="9"></label></td>
						</tr>
						<tr>
							<td>Jonathan dzjnkzdn izdjiezjd izhudazh efzuihefzu</td>
							<td><input name="group1" class="prop4" type="radio" id="10"/><label for="10"></label></td>
							<td><input name="group2" class="prop4" type="radio" id="11"/><label for="11"></label></td>
							<td><input name="group3" class="prop4" type="radio" id="12"/><label for="12"></label></td>
						</tr>
						<tr>
							<td>Jonathan dzjnkzdn izdjiezjd izhudazh efzuihefzu</td>
							<td><input name="group1" class="prop5" type="radio" id="13"/><label for="13"></label></td>
							<td><input name="group2" class="prop5" type="radio" id="14"/><label for="14"></label></td>
							<td><input name="group3" class="prop5" type="radio" id="15"/><label for="15"></label></td>
						</tr>
						<tr>
							<td>Jonathan dzjnkzdn izdjiezjd izhudazh efzuihefzu</td>
							<td><input name="group1" class="prop6" type="radio" id="16"/><label for="16"></label></td>
							<td><input name="group2" class="prop6" type="radio" id="17"/><label for="17"></label></td>
							<td><input name="group3" class="prop6" type="radio" id="18"/><label for="18"></label></td>
						</tr>
					</tbody>
				</table>
				<br>
				<button class="btn waves-effect waves-light" type="submit" name="action">Continuer
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>



		
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<div class="footer-copyright">
				<div class="container">
				© 2014 Copyright Text
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
        </footer>
	</body>
</html>

<script src="materialize/js/materialize.js"></script>
<script>
$("input[type=radio]").click(function(){
	$("."+$(this).attr("class")).not($(this)).attr("checked",false);
});
</script>