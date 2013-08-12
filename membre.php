<?php
session_start();
if (!isset($_SESSION['login'])) {
  header ('Location: connexion.php');
  exit();
}
?>
<?php include ('inc/header.php'); ?>
      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ORIZON //</span> Membre - Information sur le Compte</h2>
            </div>
            <ul id="general_news">
            <li>
              <div id="login">
                <div class="bienvenue"></div>
                <center>
                <table>
                  <tr>
                    <td class="pseudo"colspan="2">Compte de <?php echo $_SESSION['login']; ?></td>
                  </tr>
                  <tr>
                    <td class="license">N° de LICENSE FFJVR:</td>
                    <td><?php echo $_SESSION['num_license_ffjvr']; ?></td>
                  </tr>
                </table>
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
              <div class="menu_cpt">
              <center>
              <a href="membre/modif_information.php"><li>Modifier Vos Informations</li></a>
              <a href="membre/liste_jeux.php"><li>Liste des Jeux</li></a>
              <a href="membre/classement_jeux.php"><li>Classement</li></a>
              <?php
              if($_SESSION['niv_admin']=1){echo "<a href=administration/><li>Administration</li></a>";}
              ?>
            </center>
            </div>
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
    <?php include ('inc/footer.php'); ?>