<?php
/* Script écrit par RVJ-WEB
Créé le 27 MAI 2006
Droits de reproduction autorisés */

session_start();

if(!@$_SESSION['session'])
	{
	require_once('config.php');
	$titre_page='Index';
	
if(isset($_GET['erreur']))
	{
	echo'<span class="erreur">';
	$erreur=$_GET['erreur'];
	if($erreur=="pseudo")
		{
		echo'Erreur : Votre pseudo est invalide';
		}
	if($erreur=="passe")
		{
		echo'Erreur : Votre mot de passe est invalide';
		}
	if($erreur=="connexion")
		{
		echo"Erreur : Votre mot de passe ne correspond pas avec votre pseudo";
		}
	echo'</span>';
	}
	
include ('../inc/header.php'); 
?>
      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ESFCT //</span> Connexion</h2>
            </div>
            <ul id="general_news">
            <li>
<form method="post" action="login.php">
<table width="300" border="0" align="center">
<tr>
<td colspan="2" class="menu">Identification</td>
</tr>
<tr>
<td><label for="pseudo">Pseudo : </label></td>
<td><input type="text" name="pseudo" id="pseudo" /></td>
</tr>
<tr>
<td><label for="mdp">Mot de passe : </label></td>
<td><input type="password" name="mdp" id="mdp" />
</td>
</tr>
<tr>
<td>
<input type="submit" value="Envoyer" />
</td>
</tr>
</table>
</form>
<div align="center"><a href="inscription.php">Pas encore inscrit ?</a>
	</li>
            
          </ul>
          <!--<ul id="pager">
            <li><a href="#" ><img alt="alt_example" src="./images/left_pager.jpg" border="0"/></a></li>
            <li><a href="#" >1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#" class="active">3</a></li>
            <li><a href="#"><img alt="alt_example" src="./images/right_pager.jpg" border="0"/></a></li>
          </ul>-->
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
        
        <!-- Right wrapper Start -->

      	<div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 

    
    <!--********************************************* Footer start *********************************************-->
    <?php include ('../inc/footer.php'); ?>
<?php 
if($localite != 'local')
echo'<br /><a href="perdu.php">Mot de passe perdu ?</a>';
echo'</div>';
	}
else
	{
	require_once('config.php');
	require_once('verifications.php');
	$titre_page='Index membres';
	?>
		<?php include ('../inc/header.php'); ?>
      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ESFCT //</span> Page Membre</h2>
            </div>
            <ul id="general_news">
            <li>
              <!-- INFORMATION -->
            <div class="information">
            	<div class="bienvenue">Information sur le Joueur</div>
            	<div class="identite">Joueur: <br><?php echo $nom; ?> <?php echo $prenom; ?></div><br>
            	<div class="pseudo">Pseudo: <?php echo $pseudo; ?></div><br />
            	<div class="license">LICENSE FFJVR N&deg;: <?php echo $ffjvr; ?></div>
            	<div class="departement">D&eacute;partement: <?php echo $dep; ?></div>
            	<div class="categorie">Cat&eacute;gorie: <?php 
            		if($cat_username==1){echo "Junior";}
            		if($cat_username==2){echo "Senior";}
            		if($cat_username==3){echo "Veterant";}


            	 ?></div>
            	<div class="age">Age: <?php echo $age; ?> ans</div>
            	<?php
            		if($active_equipe == 1){echo "<div class='equipe'>EQUIPE: ".$nom_equipe."</div>";}
            	?><br />
            </div>
              <!-- FIN INFORMATION -->
              <!-- DEBUT JEUX ACTIVER -->
              <h1>JEUX ACTIVE</h1>
              <ul>
              <?php
                if($act_csgo == 1){echo "<img src='../images/icons/jeux/csgo.gif' />  COUNTER STRIKE GO<br>";}
                if($act_shoot == 1){echo "<img src='../images/icons/jeux/shootmania.gif' />  SHOOTMANIA STORM<br>";}
                if($act_dota2 == 1){echo "<img src='../images/icons/jeux/dota2.gif' />  DOTA 2<br>";}
                if($act_sc2 == 1){echo "<img src='../images/icons/jeux/starcraft2.gif' />  STARCRAFT II<br>";}
                if($act_fifa == 1){echo "<img src='../images/icons/jeux/fifa13.gif' />  EA SPORT FIFA<br>";}
                if($act_trackmania == 1){echo "<img src='../images/icons/jeux/trackmania.gif' />  TRACKMANIA<br>";}
              ?>
            </ul>
              <!-- FIN JEUX ACTIVER -->
              <!-- STATUT CLASSEMENT -->
              <h1><span>VOTRE CLASSEMENT</span></h1>
              
              <div class="table_classement">
              <table class="tableau_class">
                <tr>
                  <th>Jeux</th>
                  <th>Position</th>
                  <th>Classement</th>
                  <th>Ratio</th>
                  <th>Qualification</th>
                </tr>
                <tr>
                  <td>Counter-Strike: GO</td>
                  <td>
                    <?php
                    if($act_csgo == 1){echo $rank_csgo;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_csgo == 1){echo $class_csgo;}?></td>
                  <td><?php echo $rank_csgo_total; ?></td>
                  <td><?php if($rank_csgo_total == 0){echo "NC";}elseif ($rank_csgo_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
                <tr class="tr_class">
                  <td>Shootmania Storm</td>
                  <td>
                    <?php
                    if($act_shoot == 1){echo $rank_shoot;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_shoot == 1){echo $class_shoot;}?></td>
                  <td><?php echo $rank_shoot_total; ?></td>
                  <td><?php if($rank_shoot_total == 0){echo "NC";}elseif ($rank_shoot_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
                <tr class="tr_class">
                  <td>DOTA2</td>
                  <td>
                    <?php
                    if($act_dota2 == 1){echo $rank_dota2;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_dota2 == 1){echo $class_dota2;}?></td>
                  <td><?php echo $rank_dota2_total; ?></td>
                  <td><?php if($rank_dota2_total == 0){echo "NC";}elseif ($rank_dota2_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
                <tr class="tr_class">
                  <td>Starcraft II</td>
                  <td>
                    <?php
                    if($act_sc2 == 1){echo $rank_sc2;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_sc2 == 1){echo $class_sc2;}?></td>
                  <td><?php echo $rank_sc2_total; ?></td>
                  <td><?php if($rank_sc2_total == 0){echo "NC";}elseif ($rank_sc2_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
                <tr class="tr_class">
                  <td>EA SPORT FIFA</td>
                  <td>
                    <?php
                    if($act_fifa == 1){echo $rank_fifa;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_fifa == 1){echo $class_fifa;}?></td>
                  <td><?php echo $rank_fifa_total; ?></td>
                  <td><?php if($rank_fifa_total == 0){echo "NC";}elseif ($rank_fifa_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
                <tr class="tr_class">
                  <td>Trackmania</td>
                  <td>
                    <?php
                    if($act_trackmania == 1){echo $rank_trackmania;}else{echo "NC";}
                    ?>
                  </td>
                  <td><?php if($act_trackmania == 1){echo $class_trackmania;}?></td>
                  <td><?php echo $rank_trackmania_total; ?></td>
                  <td><?php if($rank_trackmania_total == 0){echo "NC";}elseif ($rank_trackmania_total < 5) {echo "<font color=green>QUALIFIER</font>";}else{echo "<font color=red>NON QUALIFIER</font>";} ?></td>
                </tr>
              </table>
            </div>
          
            <!-- FIN CLASSEMENT -->
          
            </li>
            
          </ul>
          <!--<ul id="pager">
            <li><a href="#" ><img alt="alt_example" src="./images/left_pager.jpg" border="0"/></a></li>
            <li><a href="#" >1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#" class="active">3</a></li>
            <li><a href="#"><img alt="alt_example" src="./images/right_pager.jpg" border="0"/></a></li>
          </ul>-->
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
        
        <!-- Right wrapper Start -->
        <div  id="right_wrapper">
          <div class="review">
            <div class="header"><a href="#">Gestion de Compte</a></div>
            <ul>
              <a href='modif-info.php' class="read_more2">Modifier mes Informations</a>
              <a href='ajout-jeu.php' class="read_more2">Activer un jeu</a>
              <a href='logout.php' class='read_more'>Logout</a>
                </li>
            </ul>
          </div>
            
             <!-- Right wrapper end -->
      
        </div>
      	<div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 

    
    <!--********************************************* Footer start *********************************************-->
    <?php include ('../inc/footer.php'); ?>
	<?php
	}
?>