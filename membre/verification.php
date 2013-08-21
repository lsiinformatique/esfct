<?php
/* Script écrit par RVJ-WEB
Créé le 27 MAI 2006
Droits de reproduction autorisés */

session_start();
require_once('config.php');
$titre_page='Inscription';
$email=formulaires($_POST['email']);
$pseudo=formulaires($_POST['pseudo']);
$mdp=formulaires($_POST['mdp']);
$mdp2=formulaires($_POST['mdp2']);
$ffjvr=formulaires($_POST['ffjvr']);
$dep=formulaires($_POST['dep']);
$nom=formulaires($_POST['nom']);
$prenom=formulaires($_POST['prenom']);
$age=formulaires($_POST['age']);
$active_equipe=formulaires($_POST['active_equipe']);
$nom_equipe=formulaires($_POST['nom_equipe']);
$act_csgo=formulaires($_POST['act_csgo']);
$act_shoot=formulaires($_POST['act_shoot']);
$act_sc2=formulaires($_POST['act_sc2']);
$act_dota2=formulaires($_POST['act_dota2']);
$act_fifa=formulaires($_POST['act_fifa']);
$act_trackmania=formulaires($_POST['act_trackmania']);

//// VERIFICATIONS BANALES ////
if(!$mdp || !$mdp2 || strlen($mdp) < 5)
	{
	echo'Votre mot de passe ou sa confirmation est inexisant ou votre mot de passe fait moins de 5 carractères<br /><a href="inscription.php" onClick="history.back()">Retour</a>';

return FALSE;
	}
if($mdp!=$mdp2)
	{
	echo'Votre mot de passe n\'est pas le meme que sa confirmation<br /><a href="inscription.php" onClick="history.back()">Retour</a>';

return FALSE;
	}
if(!$pseudo || strlen($pseudo) > 15)
	{
	echo'Votre pseudo est inexisant ou fait plus de 15 carractères<br /><a href="inscription.php" onClick="history.back()">Retour</a>';

return FALSE;
	}
if(!$email)
   	{
	echo'Votre e-mail est innexistant.<br /><a href="inscription.php" onClick="history.back()">Retour</a>';

return FALSE;
   	}
	
//// VERIFICATIONS DES EXISTANCES ////
$reponse_mail=mysql_query("SELECT email FROM membres WHERE email='$email'") or die ('Erreur : '.mysql_error());	//verification si e-mail existe déjà
$count_mail=mysql_num_rows($reponse_mail);
if($count_mail == 1)
	{
	echo'Cet e-mail existe déjà.<br /><a href="inscription.php" onClick="history.back()">Retour</a>';
	include_once('bas.php');
return FALSE;
	}
$reponse_pseudo=mysql_query("SELECT pseudo FROM membres WHERE pseudo='$pseudo'") or die ('Erreur : '.mysql_error());	//verification si pseudo existe déjà
$count_pseudo=mysql_num_rows($reponse_pseudo);
if($count_pseudo == 1)
	{
	echo 'Ce pseudo existe déjà.<br /><a href="inscription.php" onClick="history.back()">Retour</a>';
	include_once('bas.php');
return FALSE;
	}
		
	for ($ligne=0;$ligne<30;$ligne++)		//Création d'un identifiant aléatoire
		{
		@$session.=substr('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN',(rand()%(strlen('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN'))),1);
		}

		$mdp=md5($mdp);		//Codage du mot de passe
		mysql_query("INSERT INTO membres(id, session, pseudo, passe, email, ffjvr, depart, nom, prenom, age, active_equipe, nom_equipe, active_csgo, active_shoot, active_dota2, active_sc2, active_fifa, active_trackmania) VALUES ('', '$session', '$pseudo', '$mdp', '$email', '$ffjvr', '$dep', '$nom', '$prenom', '$age', '$active_equipe', '$nom_equipe', '$act_csgo', '$act_shoot', '$act_sc2', '$act_dota2', '$act_fifa', '$act_trackmania')") or die ('Erreur : '.mysql_error());	//insertion dans la bdd
echo'Merci de vous vous etre inscrit à '.$nom_du_site.'<br /><a href="index.php">Identifiez vous !</a>';
?>