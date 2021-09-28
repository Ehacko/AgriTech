<?php
  $db = new PDO('mysql:host=localhost; dbname=agritech', 'root', '');
  $db -> exec("SET CHARACTER SET utf8");

  if( isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['newsletter']) && isset($_POST['CGU']) ) {
    
    // $query_str = 'INSERT INTO `contact`(`name`, `phone`, `email`, `newsletter`, `cgu`) VALUES (?, ?, ?, ?, ?)';
    $query_str = "INSERT INTO `contact`(`name`, `phone`, `email`, `newsletter`, `CGU`) VALUES ('$_POST[name]', '$_POST[phone]', '$_POST[email]', $_POST[newsletter], $_POST[CGU])";
    $db_select = $db->prepare($query_str);
    // $db_select -> bindParam(1, "$_POST[name]");
    // $db_select -> bindParam(2, "$_POST[phone]");
    // $db_select -> bindParam(3, "$_POST[email]");
    // $db_select -> bindParam(4, "$_POST[newsletter]");
    // $db_select -> bindParam(5, "$_POST[CGU]");

    echo $db_select -> execute() ? 'Votre contact à bien été ajouté' : 'fail';

  } else {

    $query_str = "SELECT * FROM contact";
    $db_select = $db->prepare($query_str);
    $db_select -> execute();
    var_dump($db_select->fetchall());

  }
?>