<?php include ('inc/header.php'); ?>
<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
    // on teste les deux mots de passe
    if ($_POST['pass'] != $_POST['pass_confirm']) {
      $erreur = 'Les 2 mots de passe sont différents.';
    }
    else {
      $base = mysql_connect ('localhost', 'root', '');
      mysql_select_db ('esfct', $base);

      // on recherche si ce login est déjà utilisé par un autre membre
      $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"';
      $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
      $data = mysql_fetch_array($req);

      if ($data[0] == 0) {
        $sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['login']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

        session_start();
        $_SESSION['login'] = $_POST['login'];
        header('Location: membre.php');
        exit();
      }
      else {
        $erreur = 'Un membre possède déjà ce login.';
      }
    }
  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}
?>
      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ORIZON //</span> Membre</h2>
            </div>
            <ul id="general_news">
            <li>
              <center>

              <form action="inscription.php" method="post">
                <table>
                  <tr>
                      <td>Login :</td> 
                      <td><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"></td>
                  </tr>
                  <tr>
                    <td>Mot de passe :</td> 
                    <td><input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"></td>
                  </tr>
                  <tr>
                   <td>Confirmation du mot de passe :</td> 
                   <td><input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><td>
                  </tr>
                </table><br>
                    <input type="submit" name="inscription" value="Inscription">
                
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
            <div id="search">
              <input type="text" onblur="if(this.value =='') this.value='search'" onfocus="if (this.value == 'search') this.value=''" value="search" name="s" class="required" id="s" />
              <input type="button" />
            </div>
            <?php include ('inc/match_right.php'); ?>
            
             <!-- Right wrapper end -->
      
        </div>
      	<div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 

    
    <!--********************************************* Footer start *********************************************-->
    <?php include ('inc/footer.php'); ?>