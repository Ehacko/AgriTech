
          <section class="page">
            <div id="media" class="anchor"></div>
            <h2>
              Média
            </h2>
            <div class="container media-body p-1">
              <div class="p-2 border border-success media-container">
                <div>
                  <div id="mediaCarousel" class="carousel slide" data-ride="carousel">
                    <?php
                      $query_str = "SELECT * FROM media";
                      $db_select = $db->prepare($query_str);
                      $db_select -> execute();
                      $medias = $db_select->fetchall()
                    ?>
                    <ol class="carousel-indicators">
                      <?php
                        foreach( $medias as $key=>$row) {
                      ?>
                      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>" <?php if($key===0){ ?> class="active" <?php } ?> ></li>
                    
                      <?php } ?>
                    </ol>
                    <div class="carousel-inner">
                      <?php
                        foreach( $medias as $key=>$row) {
                      ?>
                      <div class="carousel-item <?php echo $key === 0 ? "active" : "" ?>">
                        <img src="<?php echo $row['url'] ?>" class="d-block w-100" alt="<?php echo $row['description'] ?>">
                      </div>
                      <?php
                        }
                      ?>
                    </div>
                    <a class="carousel-control-prev" href="#mediaCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mediaCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div> 
                </div>
              </div>
            </div>
          </section>
