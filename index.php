<?php
//   header("Cache-Control: max-age=2592000");
//   $seconds_to_cache = 60*60*24*7;
//   $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
//   header("Expires: $ts");
//   header("Pragma: cache");
//   header("Cache-Control: max-age=$seconds_to_cache");
#  include 'common/top-cache.php';
  include 'common/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include 'common/head.php' ?>
    <?php include 'common/front_office/head.php' ?>
  </head>
  <body>
    <?php include 'components/front_office/main.php' ?>
  </body>
</html>

<?php
  #$query_str = null; $db_select = null;
  #include 'common/bottom-cache.php';
?>
