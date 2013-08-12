<?php
include ('inc/header.php');
?>
    
    <!--********************************************* Mainmenu end *********************************************-->  
    <?php include ('inc/slide.php'); ?>
    <div class="top_shadow"></div>
    <!--********************************************* Main start *********************************************-->
    <div id="main_news_wrapper">
       <div id="row"> 
        <!-- Left wrapper Start -->
<?php include ('inc/news.php'); ?>
        <!-- Left wrapper end --> 
        <!-- Right wrapper Start -->
        <div id="right_wrapper">
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
    <?php include ('inc/footer.php'); ?>


