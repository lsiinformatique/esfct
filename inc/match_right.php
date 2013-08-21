    <?php
    $match_query = mysql_query('SELECT * FROM match ORDER BY id DESC LIMIT 0, 5');
    $donnees_match = mysql_fetch_assoc($match_query)
    ?>
          <div class="review">
            <div class="header"><a href="#">Prochain Match</a></div>
            <ul>
              <li>
                <div class="img"><a href="<?php echo $donnees_match['link']; ?>"><img alt="alt_example" src="./images/media/thumb/<?php echo $donnees_match['images']; ?>.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html"><u>STARCRAFT II</u>: <br><?php echo $donnees_match['challenger1']; ?> VS. <?php echo $donnees_match['challenger2']; ?></a><br/>
                  <small>08/08/2013</small><br/>
                  <a href="starcraft/score/8-8-13.php">Tableau des Scores</a>

              </li>
            </ul>
          </div>