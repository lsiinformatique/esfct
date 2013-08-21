<?php include ('inc/header.php'); ?>

      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ORIZON //</span> Tournoi & Match</h2>
            </div>
            <ul id="general_news">
            <li>
                <center>
                <table border="2" class="tournoi-table">
                    
                    <tr>
                        <th>Date</th>
                        <th>Versus</th>
                        <th>Type</th>
                    </tr>
                    <?php
                    $sql = mysql_query("SELECT * FROM tournoi_csgo ORDER BY date_tournoi DESC LIMIT 0, 5 ");
                    while($donnees_tournoi_csgo = mysql_fetch_assoc($sql))
                    {
                        if($donnees_tournoi_csgo['id'] == 0){
                    ?>
                    <tr>
                        <td colspan="3">Aucun tournoi engager pour le moment</td>
                    </tr>
                    <?php }else{ ?>
                    <tr>
                        <td><?php echo $donnees_tournoi_csgo['date_tournoi']; ?></td>
                        <td><div class="team"><?php echo $donnees_tournoi_csgo['team1']; ?></div> <div class="versus"><font color="#0000cc">V</font><font color="#0a1fd6">E</font><font color="#143de0">R</font><font color="#1f5ceb">S</font><font color="#297af5">U</font><font color="#3399ff">S</font></div> <div class="team"><?php echo $donnees_tournoi_csgo['team2']; ?></div></td>
                        <td><?php echo $donnees_tournoi_csgo['type']; ?></td>
                    </tr>
                    <?php }} ?>
                
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

