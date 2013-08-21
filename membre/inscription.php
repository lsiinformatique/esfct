<?php
/* Script écrit par RVJ-WEB
Créé le 27 MAI 2006
Droits de reproduction autorisés */

session_start();
require_once('config.php');
$titre_page='Inscription';
include ('../inc/header.php'); 
?>
<div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ESFCT //</span> Page Membre</h2>
            </div>
            <ul id="general_news">
            <li>
<form method='post' action='verification.php' enctype='multipart/form-data'>	
	<table width="400" border="0" align="center">
	<tr>
	<td colspan="2" class="menu">Inscription</td>
	</tr>
  <tr>
	<td><label for="mdp">Mot de passe : </label></td>
	<td><input name="mdp" type="password" id="mdp" /></td>
	</tr>
	<tr>
	<td><label for="mdp2">Confirmation du mot de passe : </label></td>
	<td><input name="mdp2" type="password" id="mdp2" /></td>
	</tr>


                  <tr>
                    <td>Pseudo:</td>
                    <td><input type="text" name="pseudo"  /></td>
                  </tr>

                  <tr>
                    <td>N&deg; de License FFJVR:</td>
                    <td><input type="text" name="ffjvr"  /></td>
                  </tr>

                  <tr>
                    <td>Adresse Mail:</td>
                    <td><input type="text" name="email"  /></td>
                  </tr>

                  <tr>
                    <td>D&eacute;partement:</td>
                    <td><input type="text" name="dep"  /></td>
                  </tr>

                  <tr>
                    <td>Nom:</td>
                    <td><input type="text" name="nom" v /></td>
                  </tr>

                  <tr>
                    <td>Prenom:</td>
                    <td><input type="text" name="prenom"  /></td>
                  </tr>

                  <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age"  /></td>
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
                    <td><input type="text" name="nom_equipe"  /></td>
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
	</div>
	<center><a href="index.php">Retour</a></center>
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
<!--         <div  id="right_wrapper">
            <div class="review">
            <div class="header"><a href="#">Gestion de Compte</a></div>
            <ul>
              <li><a href="ajoutgame-1.php" class="read_more2">Ajouter un jeux</a>
              <a href="" class="read_more2">Modifier mes informations</a>
              <a href="" class="read_more2">Faire partie du Staff</a>
              <?php if($active_equipe == 0){echo "<a href='' class='read_more3'>Rechercher une Equipe</a>";} ?>
              <a href='logout.php' class='read_more'>Logout</a>
              	</li>
            </ul>
          </div>
            
             <!-- Right wrapper end -->
      
        </div> -->
      	<div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 

    
    <!--********************************************* Footer start *********************************************-->
    <?php include ('../inc/footer.php'); ?>

