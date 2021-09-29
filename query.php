<?php

  include 'components/db.php';
  for($i = 1; $i < 4; $i++) {
    
    $query_str = "UPDATE media SET url = '/imgs/media$i.avif' WHERE url = 'media$i.avif';";

    $db_select = $db->prepare($query_str);
    echo $db_select -> execute();
    
  }
  
?>
