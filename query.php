<?php

  include 'components/db.php';
  $query_str = "UPDATE media SET url = '/imgs/media' WHERE url = 'media';";

  $db_select = $db->prepare($query_str);
  $db_select -> execute();
  
?>
