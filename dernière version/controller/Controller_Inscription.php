<?php
	require_once ('../model/User.php');


	$name = htmlspecialchars($_POST['name']);
	$firstName = htmlspecialchars($_POST['firstname']);
	$gender = htmlspecialchars($_POST['gender']);
	$mail = htmlspecialchars($_POST['email']);
	$password = sha1(sha1(htmlspecialchars($_POST['password'])));
	$password_check = sha1(sha1(htmlspecialchars($_POST['password_check'])));
	

	$mailverif=User::Check_Mail($mail);


	if (empty($name) || empty($firstName) || empty($password) || empty($password_check) || empty($mail) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		require("../view/page_erreur.php");
	}
	elseif ($password != $password_check) {
		$messageErreur = 'Les mots de passe saisies ne sont pas identiques ! ';
		
		require("../view/page_erreur.php");
	}
	elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
		$messageErreur = "Votre email n'est pas valide  ! ";
		
		require("../view/page_erreur.php");	
	}
	elseif (!(is_null($mailverif['memberId']))) {
		$messageErreur = "Ce mail est déjà associé à un compte !";
		
		require("../view/page_erreur.php");
	}
	else
	{
		
		User::Add_User($gender,$name,$firstName,$password,$mail);

		$cookiecode=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
			

			setcookie('codeconnexion', $cookiecode, time()+(300), "/");

			User::Set_User_Coockie_Code($mail,$cookiecode);
		
		require( "../controller/Controller_Page_Accueil.php");
	}
	
?>