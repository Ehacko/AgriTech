<?php
//   header("Cache-Control: max-age=2592000");
//   $seconds_to_cache = 60*60*24*7;
//   $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
//   header("Expires: $ts");
//   header("Pragma: cache");
//   header("Cache-Control: max-age=$seconds_to_cache");
  include 'cache/top-cache.php'
  include 'components/db.php'
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include 'components/head.php' ?>
  </head>
  <body>
    <main>
      <?php include 'components/header.php' ?>
      <?php include 'components/nav.php' ?>
      <div class="main">
        <?php include 'components/about.php' ?>
        <?php include 'components/machines.php' ?>
        <?php include 'components/media.php' ?>
      </div>
      <?php include 'components/footer.php' ?>
    </main>
  </body>
</html>

<?php
  #$query_str = null; $db_select = null 
//   include 'cache/bottom-cache.php'
?>
