<?php 
#include 'components/db.php'
$ch = curl_init("'https://api.airtable.com/'");
$fp = fopen("v0/appOuRReYKFkgUUJf/contact?api_key=YOUR_API_KEY", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);
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
        <?php #include 'components/machines.php' ?>
        <?php #include 'components/media.php' ?>
      </div>
      <?php include 'components/footer.php' ?>
    </main>
  </body>
</html>

<?php #$query_str = null; $db_select = null ?>
