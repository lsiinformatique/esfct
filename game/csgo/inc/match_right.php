        <div class="review">
            <div class="header"><a href="#">Prochain Match</a></div>
            <ul>
              <li>
                <?php
                $sql = mysql_query("SELECT * FROM match ORDER BY date DESC LIMIT 0, 5");
                while($donnees_match = mysql_fetch_assoc($sql))
                {
                ?>
                <div class="img"><a href="<?php echo $donnees_match['link']; ?>"><img alt="alt_example" src="./images/media/thumb/<?php echo $donnees_match['images']; ?>.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html"><u>STARCRAFT II</u>: <br><?php echo $donnees_match['challenger1']; ?> VS. <?php echo $donnees_match['challenger2']; ?></a><br/>
                  <small>08/08/2013</small><br/>
                  <a href="starcraft/score/8-8-13.php">Tableau des Scores</a>
                  <?php } ?>
              </li>
            </ul>
          </div>