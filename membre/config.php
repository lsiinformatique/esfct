<?php
/* Script �crit par RVJ-WEB
Cr�� le 27 MAI 2006.
Modifi� le 28 MAI 2006.
Droits de reproduction autoris�s */

$serveur='localhost';	//Nom du serveur (en local : locahost)
$user='root';	//Nom de l'utilisateur (en local : root)
$mdp='';	//Mot de passe (en local : aucun)
$base='esfct';	//Nom de la base de donn�es

$nom_du_site='ESFCT - ESPACE MEMBRE';		//Le nom de votre site
$votre_email='contact@esfct.com';	//Votre e-mail
$localite='local';	//Si vous etes en local ne rien changer (l'option passe perdu ne marche pas) sinon ne mettez rien.

//Les meta tags (r�f�rencement)
$meta_description='Espace Membre de ESFCT';		//Description du site
$meta_mots_cles='Mon, Site, a, moi';	//Mot cl�s (s�par�s par des virgules)



/* ATTENTION : NE PAS CHANGER CE QU'IL Y A CI-DESSOUS */
@$connect=mysql_connect($serveur, $user, $mdp) or die ('Erreur : '.mysql_error());
@mysql_select_db($base) or die ('Erreur : '.mysql_error());
require_once('fonctions.php');
?>