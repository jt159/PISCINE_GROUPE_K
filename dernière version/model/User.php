<?php
class User
{

public static function Check_Password($userPassword,$userMail)
{
	require_once('Pdo.php');
	$bdriasec=connexion();
   //connecté à la base de donnée 

	$req = $bdriasec->prepare("SELECT User_Password FROM User WHERE User_Mail='".$userMail."'");

	$req->execute();
	$data=$req->fetch();

	return ($data['User_Password']==$userPassword);
	
}
public static function Set_User_Coockie_Code($userMail,$userCookieCode){

	require_once('Pdo.php');
	$bdriasec=connexion();

	$req = $bdriasec->prepare("UPDATE User SET User_Cookie_Code =:cookie WHERE User_Mail=:mail");
	$req->bindParam(':cookie',$userCookieCode);
	$req->bindParam(':mail',$userMail);

	$req->execute();
}

public static function Get_User_Id ($userCookieCode){
	require_once('Pdo.php');
	$bdriasec=connexion();


	$req = $bdriasec->prepare("SELECT User_Id FROM User WHERE User_Cookie_Code='".$userCookieCode."'");

	$req->execute();
	$data=$req->fetch();

	return $data;
}

public static function Check_Mail($mail){
	require_once('Pdo.php');
	$bdriasec=connexion();

	$req = $bdriasec->query("SELECT * FROM User WHERE User_Mail='".$mail."'");
	

	$data=$req->fetch();

	return $data;
}

public static function Add_User($gender,$name,$firstName,$password,$mail){
	require_once('Pdo.php');
	$bdriasec=connexion();

	$req = $bdriasec->prepare('INSERT INTO User(User_Gender, User_Name, User_First_Name, User_Password, User_Mail) VALUES (:gender, :name,:firstname,:password,:mail)');
	$req->bindParam(':gender',$gender);
	$req->bindParam(':name',$name);
	$req->bindParam(':firstname',$firstName);
	$req->bindParam(':password',$password);
	$req->bindParam(':mail',$mail);

	$req->execute();
}

}

?>