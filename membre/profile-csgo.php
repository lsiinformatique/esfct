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
            <h2><span>ESFCT //</span> Profile CS:GO</h2>
            </div>
            <ul id="general_news">
            <li>
              <?php 
              if($resultat['active_csgo']==0){
                ?>
                <div id="box">
                  <div class="position"><?php echo $resultat['rank_csgo']; ?><?php if($resultat['rank_csgo']>1){echo "eme";}else{echo "er";}?></div>
                  <div class="classement">
                    <?php
                    $classement = $resultat['class_csgo'];
                    switch ($classement) {
                      case 'A1':
                        echo "<font color=red>".$resultat['class_csgo']."</font>";
                        break;
                      
                      default:
                        echo "Pas dans le classement";
                        break;
                    }
                    ?>

                  </div>
                <?php
              }else{
                ?>
                Veuillez Activer CS GO afin d'avoir acces au classement et tournoi
                <?php
              }
              ?>

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
              <li><a href="ajoutgame-1.php" class="read_more2">Ajouter un jeux</a>
              <a href="" class="read_more2">Modifier mes informations</a>
              <a href="" class="read_more2">Faire partie du Staff</a>
              <a href="" class="read_more3">Rechercher une Equipe</a>
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