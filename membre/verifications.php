<?php
/* Script écrit par RVJ-WEB
Créé le 27 MAI 2006
Droits de reproduction autorisés */

$session=formulaires($_SESSION['session']);
if(!@$_SESSION['session'])
	{
	header('Location:index.php?erreur=connexion');
	return false;
	}
	
$verif=mysql_query("SELECT * FROM membres WHERE session='$session'") or die ('Erreur : '.mysql_error());	//on vérifie si il existe une entrée avec cet identifiant
$verif=mysql_num_rows($verif);
if($verif == 0)
	{
	header('Location:index.php?erreur=connexion');
	session_unset();
	session_destroy();
	return false;
	}

$sql=mysql_query("SELECT * FROM membres WHERE session='$session'") or die ('Erreur : '.mysql_error());
while ($resultat = mysql_fetch_array($sql) )
	{
	$email = $resultat['email'];
	$pseudo = $resultat['pseudo'];
	$id = $resultat['id'];
	$niv_admin = $resultat['niv_admin'];
	$ffjvr = $resultat['ffjvr'];
	$dep = $resultat['depart'];
	$cat_username = $resultat['cat_username'];
	$nom = $resultat['nom'];
	$prenom = $resultat['prenom'];
	$age = $resultat['age'];
	$active_equipe = $resultat['active_equipe'];
	$nom_equipe = $resultat['nom_equipe'];
	//activation des jeux
	$act_csgo = $resultat['active_csgo'];
	$act_shoot = $resultat['active_shoot'];
	$act_dota2 = $resultat['active_dota2'];
	$act_sc2 = $resultat['active_sc2'];
	$act_fifa = $resultat['active_fifa'];
	$act_trackmania = $resultat['active_trackmania'];
	//RANK JEUX
	$rank_csgo = $resultat['rank_csgo'];
	$rank_shoot = $resultat['rank_shoot'];
	$rank_dota2 = $resultat['rank_dota2'];
	$rank_sc2 = $resultat['rank_sc2'];
	$rank_fifa = $resultat['rank_fifa'];
	$rank_trackmania = $resultat['rank_trackmania'];
	//calcul Ranking discipline
	$rank_csgo_calc1 = $rank_csgo*2/4.01;
	$rank_csgo_total = $rank_csgo_calc1;

	$rank_shoot_calc1 = $rank_shoot*2/4.01;
	$rank_shoot_total = $rank_shoot_calc1;

	$rank_dota2_calc1 = $rank_dota2*2/4.01;
	$rank_dota2_total = $rank_dota2_calc1;

	$rank_sc2_calc1 = $rank_sc2*2/4.01;
	$rank_sc2_total = $rank_sc2_calc1;

	$rank_fifa_calc1 = $rank_fifa*2/4.01;
	$rank_fifa_total = $rank_fifa_calc1;

	$rank_trackmania_calc1 = $rank_trackmania*2/4.01;
	$rank_trackmania_total = $rank_trackmania_calc1;
	//Calcul Ranking general
	$rank_gen_calc1 = $rank_csgo+$rank_shoot+$rank_dota2+$rank_sc2+$rank_fifa+$rank_trackmania*0.163;
	$rank_gen_calc2 = $rank_gen_calc1/1.33333;
	$rank_gen_total = $rank_gen_calc2;
	//Classement FFJVR/ESFCT
	$class_csgo = $resultat['class_csgo'];
	$class_shoot = $resultat['class_shoot'];
	$class_dota2 = $resultat['class_dota2'];
	$class_sc2 = $resultat['class_sc2'];
	$class_fifa = $resultat['class_fifa'];
	$class_trackmania = $resultat['class_trackmania'];

	}
?>