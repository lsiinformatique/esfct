<?php
/* Script �crit par RVJ-WEB
Cr�� le 27 MAI 2006
Droits de reproduction autoris�s */

session_start();
require_once('config.php');
//r�cup�ration des variables
$pseudo = formulaires($_POST['pseudo']);
$mdp = formulaires($_POST['mdp']);


$mdp=md5($mdp);	//Codage du mdp

if(!$pseudo)
	{
	header('Location:index.php?erreur=pseudo');
	}
if(!$mdp)
	{
	header('Location:index.php?erreur=passe');
	}
$reponse_cores=mysql_query("SELECT * FROM membres WHERE passe='$mdp' AND pseudo='$pseudo'") or die ('Erreur : '.mysql_error());
$count_cores=mysql_num_rows($reponse_cores);
if($count_cores == 0 )
	{
	header('Location:index.php?erreur=connexion');		//on v�rifie la correspondance
	}

else
	{
	for ($ligne=0;$ligne<30;$ligne++)		//Cr�ation d'un identifiant al�atoire
		{
		@$session.=substr('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN',(rand()%(strlen('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN'))),1);
		}
	
	mysql_query("UPDATE membres SET session='$session' WHERE passe='$mdp'") or die ('Erreur : '.mysql_error());
	$_SESSION['session'] = "$session";		//cr�ation de la session
	header('Location:index.php');			//redirection vers l'index
	}
include_once('bas.php');
?>
