<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   #else ob_start();
?>
<?php
  header("Cache-Control: max-age=2592000");
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

<?php #$query_str = null; $db_select = null ?>
