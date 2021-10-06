<section class="page">
  <div id="machines" class="anchor"></div>
  <h2>
    Nos machines
  </h2>
  <div class="container machines-body d-flex">
    <!-- <div class="g-row"> -->
    <div class="justify-content-between justify-content-around row row-cols-1 row-cols-md-2 row-cols-sm-1">
      <!-- Product Cards -->
      <?php
        $query_str = "SELECT * FROM machine";
        $db_select = $db->prepare($query_str);
        $db_select -> execute();
        foreach($db_select->fetchall() as $row) {
      ?>

      <div class="flip-card col jumbotron-fluid mb-3 mt-3">
        <div class="flip-card-inner">
          <div class="flip-card-front border border-success">
            <div class="card p-4">
              <div class="img">
                <img src="<?php echo $row['illustration']; ?>" class="card-img-top" alt="photo d'un <?php echo $row['name']; ?>"/>
              </div>
              <div class="pt-2">
                <h3><?php echo $row['name']; ?></h3>
                <p class="card-text"><?php echo $row['resume']; ?></p>
              </div>
            </div>
          </div>
          <div class="flip-card-back p-3 border border-success">
            <h4>Spécificité</h4>
            <div>
              <ul>
                <?php echo("<li><span>Puissance : </span><span>$row[puissance]</span></li>"); ?>
                <?php echo("<li><span>Vitesse : </span><span>$row[vitesse]</span></li>"); ?>
                <?php echo("<li><span>Consommation : </span><span>$row[consommation]</span></li>"); ?>
                <?php echo("<li><span>Type de carburant : </span><span>$row[type_de_carburant]</span></li>"); ?>
                <?php echo("<li><span>Emission : </span><span>$row[emission]</span></li>"); ?>
              </ul>
            </div>
            <button class="btn btn-dark">en savoir plus</button>
          </div>
        </div>
      </div>

      <?php
        }
      ?>
    </div>

  </div>
</section> 
