<?php include ('inc/header.php'); ?>
      
     <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
 
       <div id="row"> 
       <!-- Left wrapper Start -->
        <div id="left_wrapper">
            <div class="header">
            <h2><span>ORIZON //</span> Partenaire</h2>
            </div>
            <ul id="general_news">
            <li>
              <div class="image"><a href="./post.html"><img alt="alt_example" src="./images/partenaire_sponsor/rog-logo.jpg" /></a></div>
              <ul class="social_share">
                <li><a href="https://www.facebook.com/rog.fr?fref=ts"><img alt="alt_example" src="./images/fbk.png" border="0" /></a></li>
                <li><a href="https://twitter.com/ASUS_ROG_FR"><img alt="alt_example" src="./images/twitter.png" border="0" /></a></li>
                <li><a href="http://www.republic-of-gamers.fr/"><img alt="alt_example" src="./images/more.png" border="0" /></a></li>
              </ul>
              <div class="info">
                <!-- <div class="comments"> 18 </div> -->
                <h2><a href="./post.html">Asus République of Gamer</a></h2>
                <div class="date_n_author">10/08/2013, by Admin</div>
                <p>Republic of Gamers par ASUS - Jouons selon vos regles ! Tout le savoir faire ASUS pour des composants et PC portables surpuissant dédiés au Gaming !</p>
                 </div>
                <div class="clear">
                </div>
   
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