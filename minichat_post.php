<?php

require 'config.php';

//rengistrement des données dans une variable

$name = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);


// verification: var not empty
if (isset($name) AND !empty($name) AND isset($message) AND !empty($message)) {

//prepare query to register informations in DB and execute the query
  $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES ( :pseudo, :message)');
  $req->execute(array(
    'pseudo' => $name,
    'message' => $message
  ));

  echo 'message enregistré';

  // when the loop ends, user is redirected to form
  header('Location: minichat.php');
}

else{
  header('Location: minichat.php');
}




?>
