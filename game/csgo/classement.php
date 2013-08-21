<?php include ('inc/header.php'); ?>

      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ORIZON //</span> Classement Counter Strike: GO</h2>
            </div>
            <ul id="general_news">
            <li>
                <center>
                <table border="2" class="tournoi-table">
                    
                    <tr>
                        <th>Pos.</th>
                        <th>Joueur</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    $sql = mysql_query("SELECT * FROM classement_csgo ORDER BY id DESC LIMIT 0, 100 ");
                    while($donnees_classement_csgo = mysql_fetch_assoc($sql))
                    {
                    ?>
                    <tr>
                      <td><?php echo $donnees_classement_csgo['pos']; ?></td>
                      <td><?php echo $donnees_classement_csgo['pseudo']; ?></td>
                      <td><?php echo $donnees_classement_csgo['point']; ?></td>
                    </tr>
                    <?php } ?>
                
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
            <div id="search">
              <input type="text" onblur="if(this.value =='') this.value='search'" onfocus="if (this.value == 'search') this.value=''" value="search" name="s" class="required" id="s" />
              <input type="button" />
            </div>
            <?php include ('inc/connexion_right.php'); ?>
            
             <!-- Right wrapper end -->
      
        </div>
        <div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 

    
    <!--********************************************* Footer start *********************************************-->
    <?php include ('inc/footer.php'); ?>

