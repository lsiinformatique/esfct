        <div id="left_wrapper">
        <div class="header">
            <h2><span>ESFCT //</span> Nouvelle</h2>
          </div>
          <ul id="general_news">
            <?php
    $news_query = mysql_query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 5');
while ($donnees_news = mysql_fetch_array($news_query))
{
?>
            <li>
              <div class="image"><a href="./post.html"><img alt="alt_example" src="./images/news/<?php echo $donnees_news['images']; ?>.png" /></a></div>
              <ul class="social_share">
                <li><a href="https://www.facebook.com/Esfct"><img alt="alt_example" src="./images/fbk.png" border="0" /></a></li>
                <li><a href="https://twitter.com/ESFCT"><img alt="alt_example" src="./images/twitter.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="./images/more.png" border="0" /></a></li>
              </ul>
              <div class="info">
                <div class="comments"> 18 </div>
                <h2><a href="./post.html"><?php echo $donnees_news['title']; ?></a></h2>
                <div class="date_n_author"><?php echo $donnees_news['date']; ?>, par <?php echo $donnees_news['author']; ?></div>
                <p><?php echo $donnees_news['desc']; ?></p>
                <a href="news.php?=<?php echo $donnees_news['id']; ?>" class="read_more2">read more</a> </div>
                <div class="clear">
              </div>
            </li>
            <?php } ?>
          </ul>
            <!-- <ul id="pager">
              <li><a href="#" ><img alt="alt_example" src="./images/left_pager.jpg" border="0"/></a></li>
              <li><a href="#" >1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#" class="active">3</a></li>
              <li><a href="#"><img alt="alt_example" src="./images/right_pager.jpg" border="0"/></a></li>
            </ul> -->
          
          
          <div class="clear"></div>
          </div>