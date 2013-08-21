<!--********************************************* Banner start *********************************************-->
    
    <?php
    $slide_query = mysql_query('SELECT * FROM slide ORDER BY id DESC LIMIT 0, 5');
while ($donnees_slide = mysql_fetch_array($slide_query))
{
  if ($donnees_slide['id']!=0){
?>
    <div id="da-slider" class="da-slider">
      <div class="da-slide">
        <h2><a href="news.php?=<?php echo $donnees_slide['id']; ?>" class="da-link"><?php echo $donnees_slide['title']; ?></a></h2>
        <p><?php echo $donnees_slide['desc']; ?></p>
        <div class="da-img"><img alt="alt_example" src="./images/slide/<?php echo $donnees_slide['images']; ?>.png"  /></div>
      </div>
      <div class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </div>
    </div>
    <?php }else{echo "NO";} ?>
    <?php } ?>
    <!--********************************************* Banner end *********************************************-->