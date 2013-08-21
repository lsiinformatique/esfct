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
            <h2><span>ESFCT //</span> Modification du Profil</h2>
            </div>
            <ul id="general_news">
            <li>
              <center>  
              <form method="post" action="modif-profil-verif.php">
                <table>
                  <tr>
                    <td>Votre Id:</td>
                    <td><input type="text" name="id_pseudo" value="<?php echo $id; ?>" disabled="disabled" /></td>
                  </tr>

                  <tr>
                    <td>Pseudo:</td>
                    <td><input type="text" name="pseudo" value="<?php echo $pseudo; ?>" /></td>
                  </tr>

                  <tr>
                    <td>N° de License FFJVR:</td>
                    <td><input type="text" name="ffjvr" value="<?php echo $ffjvr; ?>" /></td>
                  </tr>

                  <tr>
                    <td>Adresse Mail:</td>
                    <td><input type="text" name="mail" value="<?php echo $email; ?>" /></td>
                  </tr>

                  <tr>
                    <td>D&eacute;partement:</td>
                    <td><input type="text" name="dep" value="<?php echo $dep; ?>" /></td>
                  </tr>

                  <tr>
                    <td>Nom:</td>
                    <td><input type="text" name="nom" value="<?php echo $nom; ?>" /></td>
                  </tr>

                  <tr>
                    <td>Prenom:</td>
                    <td><input type="text" name="prenom" value="<?php echo $prenom; ?>" /></td>
                  </tr>

                  <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age" value="<?php echo $age; ?>" /></td>
                  </tr>

                  <tr>
                    <td>Avez-vous une Equipe:</td>
                    <td>
                      <select name="active_equipe">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Si Oui, le nom de l'equipe:</td>
                    <td><input type="text" name="nom_equipe" value="<?php echo $nom_equipe; ?>" /></td>
                  </tr>
                  <tr>
                    <td><u><b>LES JEUX</b></u></td>
                  </tr>

                  <tr>
                    <td>Counter-Strike: Global Offensive</td>
                    <td>
                      <select name="act_csgo">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Shootmania Storm</td>
                    <td>
                      <select name="act_shoot">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>DOTA 2</td>
                    <td>
                      <select name="act_dota2">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Starcraft II</td>
                    <td>
                      <select name="act_sc2">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>EA SPORT FIFA</td>
                    <td>
                      <select name="act_fifa">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Trackmania</td>
                    <td>
                      <select name="act_trackmania">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" value="Valider" /></td>
                  </tr>

                </table>
              </form>
            </center>
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
    <?php } ?>